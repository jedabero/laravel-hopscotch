<?php

/**
 *
 */
trait OnCTATrait
{
    function getOnCTAAttribute()
    {
        return $this->functions()->whereEvent('onCTA')->get();
    }
}
