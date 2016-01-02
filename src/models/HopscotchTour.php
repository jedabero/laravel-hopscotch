<?php

class HopscotchTour extends \Eloquent {
	protected $fillable = [];

	public function steps()
	{
		return $this->hasMany('HopscotchStep', 'tour_id');
	}

	public function functions()
	{
		return $this->morphMany('HopscotchFunction', 'hopscotch');
	}

}
