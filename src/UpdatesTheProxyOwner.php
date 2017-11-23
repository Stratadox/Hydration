<?php

namespace Stratadox\Hydration;

interface UpdatesTheProxyOwner extends ObservesProxyLoading
{
    /**
     * Updates the property that referenced the proxy with the loaded instance.
     *
     * @inheritdoc
     */
    public function updateWith($theLoadedInstance) : void;
}
