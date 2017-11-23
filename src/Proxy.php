<?php

namespace Stratadox\Hydration;

/**
 * Proxy for the eventual value for an object property.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface Proxy
{
    /**
     * Lazily load and return the proxied object.
     *
     * @return object
     */
    public function __load();
}
