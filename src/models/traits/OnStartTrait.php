<?php

/**
 *
 */
trait OnStartTrait
{
    function getOnStartAttribute()
    {
        return $this->functions()->whereEvent('onStart')->get();
    }
}
