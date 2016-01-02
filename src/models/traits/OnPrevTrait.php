<?php

/**
 *
 */
trait OnPrevTrait
{
    function getOnPrevAttribute()
    {
        return $this->functions()->whereEvent('onPrev')->get();
    }
}
