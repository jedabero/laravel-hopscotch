<?php

class HopscotchFunctions extends \Eloquent {
	protected $fillable = [];

	public function hopscotch()
	{
		return $this->morphTo();
	}

}
