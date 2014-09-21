<?php

class Companion extends Eloquent {

	public function doctors()
	{
		return $this->belongsToMany('Doctor');
	}

	public function episodes()
	{
		return $this->belongsToMany('Episode');
	}

}
