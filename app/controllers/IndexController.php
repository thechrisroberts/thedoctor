<?php

class IndexController extends BaseController {

	public function index()
	{
		$doctors    = Doctor::take(4)->orderBy('number')->get();
		$companions = Companion::take(4)->get();
		$enemies    = Enemy::take(4)->get();
		$episodes   = Episode::take(4)->get();

		return View::make('index', ['doctors'    => $doctors,
									'companions' => $companions,
									'enemies'    => $enemies,
									'episodes'   => $episodes]);
	}
}