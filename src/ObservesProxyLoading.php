<?php

namespace Stratadox\Hydration;

interface ObservesProxyLoading
{
    /**
     * Updates the observer, passing along the loaded instance.
     *
     * @param object $theLoadedInstance The instance that replaces the proxy.
     * @return void
     */
    public function updateWith($theLoadedInstance) : void;
}
