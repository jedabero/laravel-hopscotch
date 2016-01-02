<?php

/**
 *
 */
trait OnEndTrait
{
    function getOnEndAttribute()
    {
        return $this->functions()->whereEvent('onEnd')->get();
    }
}
