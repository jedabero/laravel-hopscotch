<?php

class HopscotchStep extends \Eloquent {
	protected $fillable = [];

	public function tour()
	{
		return $this->belongsTo('HopscotchTour');
	}

	public function functions()
	{
		return $this->morphMany('HopscotchFunction', 'hopscotch');
	}

}
