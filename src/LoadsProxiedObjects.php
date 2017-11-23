<?php

namespace Stratadox\Hydration;

/**
 * Loads proxied objects, notifying its observers in the process.
 *
 * Note: these are not the proxies, but the "real" objects that were previously
 * represented by a proxy. This is the "loading" part of "lazy loading".
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface LoadsProxiedObjects
{
    /**
     * Lazily load the instance that has been proxied, but is now called upon.
     *
     * @return mixed|object The object that was proxied.
     */
    public function loadTheInstance();

    /**
     * Attach an observer to this loader.
     *
     * @param ObservesProxyLoading $observer The observer to attach
     * @return void
     */
    public function attach(ObservesProxyLoading $observer) : void;

    /**
     * Detach an observer from this loader.
     *
     * @param ObservesProxyLoading $observer The observer to detach
     * @return void
     */
    public function detach(ObservesProxyLoading $observer) : void;
}
