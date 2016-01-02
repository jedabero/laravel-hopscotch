<?php

/**
 *
 */
trait OnNextTrait
{
    function getOnNextAttribute()
    {
        return $this->functions()->whereEvent('onNext')->get();
    }
}
