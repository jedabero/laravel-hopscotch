<?php

class HopscotchTour extends \Eloquent
{
    use OnPrevTrait;
    use OnNextTrait;
    use OnStartTrait;
    use OnEndTrait;
    use OnCloseTrait;
    use OnErrorTrait;

    protected $appends = ['onPrev','onNext','onStart','onEnd','onClose','onError'];
    protected $with = ['steps'];

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
