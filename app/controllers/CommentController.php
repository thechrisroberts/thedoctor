<?php

class CommentController extends BaseController {

	public function post()
	{
		// Only permit logged in users to comment
		if (Auth::check()) {
			// Add a rule to verify the particular item exists
			Validator::extend('itemExists', function ($attribute, $value, $parameters) {
				$type = ucfirst(Input::get('type'));
				$item = $type::find($value);

				return $item;
			});

			// Validate the data
			$validator = Validator::make(
				Input::all(),
				array(
					'id'      => 'itemExists',
					'type'    => 'in:doctor,companion,enemy,episode',
					'title'   => 'required|min:5',
					'email'   => 'required|email',
					'content' => 'required',
				),
				array(
					'required'   => 'You forgot to include the :attribute on your comment!',
					'itemExists' => 'If you can see this, the universe is broken because that ' . Input::get('type') . ' does not exist.'
				)
			);

			if ($validator->fails()) {
				return Redirect::to(URL::previous() . '#comments')->withErrors($validator)->withInput();
			} else {
				$comment            = new Comment();
				$comment->user_id   = Auth::id();
				$comment->item_id   = Input::get('id');
				$comment->item_type = Input::get('type');
				$comment->title     = Input::get('title');
				$comment->content   = Input::get('content');
				$comment->save();

				return Redirect::to(URL::previous() . '#comments')->with('message', 'Comment posted');
			}
		}
	}
}