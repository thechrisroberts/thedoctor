<?php

class Episode extends Eloquent {

	public function doctors()
	{
		return $this->belongsToMany('Doctor');
	}

	public function companions()
	{
		return $this->belongsToMany('Companion');
	}

	public function enemies()
	{
		return $this->belongsToMany('Enemy');
	}
}
