<?php

/**
 *
 */
trait OnShowTrait
{
    function getOnShowAttribute()
    {
        return $this->functions()->whereEvent('onShow')->get();
    }
}
