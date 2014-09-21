<?php

class CompanionController extends BaseController {

	public function index()
	{
		$companions = Companion::get();

		return View::make('companions', [ 'companions' => $companions ]);
	}

	public function get($id)
	{
		$companion = Companion::with([ 'doctors', 'episodes' ])->find($id);
		$ratings = Rating::getRating('companion', $id);
		$comments = Comment::where('item_id', $id)
						   ->where('item_type', 'companion')
						   ->with('user')
						   ->orderBy('created_at', 'desc')
						   ->get();

		return View::make('items.companion', [ 'companion' => $companion, 'ratings' => $ratings, 'comments' => $comments ]);
	}
}