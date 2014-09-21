<?php

class UserController extends BaseController {

	public function login()
	{
		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			return Redirect::intended('dashboard');
		} else {
			return Redirect::to('/login')->with('message', 'Login Failed');
		}
	}
}