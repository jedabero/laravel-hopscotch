<?php

/**
 *
 */
trait OnCloseTrait
{
    function getOnCloseAttribute()
    {
        return $this->functions()->whereEvent('onClose')->get();
    }
}
