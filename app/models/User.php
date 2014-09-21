<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	protected $table = 'users';
	protected $hidden = array('password', 'remember_token');

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function ratings()
	{
		return $this->hasMany('Rating');
	}

}