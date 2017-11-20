<?php

namespace Stratadox\Hydration;

interface UpdatesTheProxyOwner
{
    /**
     * Updates the property that referenced the proxy with the loaded instance.
     *
     * @param object $theLoadedInstance
     * @return void
     */
    public function updateThePropertyWith($theLoadedInstance) : void;
}
