<?php

namespace Stratadox\Hydration;

/**
 * Observes the loading of proxies to get notified of lazy loading operations.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
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
