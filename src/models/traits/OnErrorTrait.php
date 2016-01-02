<?php

/**
 *
 */
trait OnErrorTrait
{
    function getOnErrorAttribute()
    {
        return $this->functions()->whereEvent('onError')->get();
    }
}
