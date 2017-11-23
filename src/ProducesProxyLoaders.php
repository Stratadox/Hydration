<?php

namespace Stratadox\Hydration;

/**
 * Produces Proxy Loaders for proxies of a certain class.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface ProducesProxyLoaders
{
    /**
     * Produce an instance that @see LoadsProxiedObjects.
     *
     * @param UpdatesTheProxyOwner $whenLoaded
     * @return LoadsProxiedObjects
     */
    public function makeLoader() : LoadsProxiedObjects;
}
