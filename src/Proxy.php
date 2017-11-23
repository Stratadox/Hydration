<?php

namespace Stratadox\Hydration;

interface Proxy
{
    /**
     * Lazily load and return the proxied object.
     *
     * @return object
     */
    public function __load();
}
