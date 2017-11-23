<?php

namespace Stratadox\Hydration;

/**
 * Updates the proxy owner with the newly loaded instance that once was proxied.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface UpdatesTheProxyOwner extends ObservesProxyLoading
{
    /**
     * Updates the property that referenced the proxy with the loaded instance.
     *
     * @inheritdoc
     */
    public function updateWith($theLoadedInstance) : void;
}
