<?php

class Enemy extends Eloquent {

	protected $table = 'enemies';

	public function doctors()
	{
		return $this->belongsToMany('Doctor');
	}

	public function episodes()
	{
		return $this->belongsToMany('Episode');
	}

}
