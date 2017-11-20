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
     * Produce an instance that @see LoadsProxiedObjects when they are called
     * upon, notifying the instance that @see UpdatesTheProxyOwner when done.
     *
     * @param UpdatesTheProxyOwner $whenLoaded
     * @return LoadsProxiedObjects
     */
    public function makeLoaderThat(UpdatesTheProxyOwner $whenLoaded) : LoadsProxiedObjects;
}
