<?php

class HopscotchStep extends \Eloquent
{
    use OnPrevTrait;
    use OnNextTrait;
    use OnShowTrait;
    use OnCTATrait;

    protected $appends = ['onPrev','onNext','onShow','onCTA'];

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
