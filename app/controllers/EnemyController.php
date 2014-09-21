<?php

class EnemyController extends BaseController {

	public function index()
	{
		$enemies = Enemy::get();

		return View::make('enemies', [ 'enemies' => $enemies ]);
	}

	public function get($id)
	{
		$enemy = Enemy::with('episodes')->find($id);
		$ratings = Rating::getRating('enemy', $id);
		$comments = Comment::where('item_id', $id)
						   ->where('item_type', 'enemy')
						   ->with('user')
						   ->orderBy('created_at', 'desc')
						   ->get();

		return View::make('items.enemy', [ 'enemy' => $enemy, 'ratings' => $ratings, 'comments' => $comments ]);
	}
}