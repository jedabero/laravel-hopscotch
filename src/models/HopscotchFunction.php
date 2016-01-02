<?php

class HopscotchFunction extends \Eloquent {
	protected $fillable = [];

	public function hopscotch()
	{
		return $this->morphTo();
	}

}
