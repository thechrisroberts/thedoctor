<?php

class Doctor extends Eloquent {

	public function comments()
	{
		return $this->belongsToMany('Comment', 'comments', 'item_id', 'id');
	}

	public function companions()
	{
		return $this->belongsToMany('Companion');
	}

	public function enemies()
	{
		return $this->belongsToMany('Enemy');
	}

	public function episodes()
	{
		return $this->belongsToMany('Episode');
	}

}
