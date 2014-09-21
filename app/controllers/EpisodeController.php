<?php

class EpisodeController extends BaseController {

	public function index()
	{
		$episodes = Episode::get();

		return View::make('episodes', ['episodes' => $episodes]);
	}

	public function get($season, $episode)
	{
		$episode = Episode::with(['doctors', 'companions', 'enemies'])
						  ->where('season', $season)
						  ->where('episode', $episode)
						  ->first();
		$ratings = Rating::getRating('episode', $episode->id);
		$comments = Comment::where('item_id', $episode->id)
						   ->where('item_type', 'episode')
						   ->with('user')
						   ->orderBy('created_at', 'desc')
						   ->get();

		return View::make('items.episode', [ 'episode' => $episode, 'ratings' => $ratings, 'comments' => $comments ]);
	}
}