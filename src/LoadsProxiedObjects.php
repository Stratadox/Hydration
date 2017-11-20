<?php

namespace Stratadox\Hydration;

interface LoadsProxiedObjects
{
    /**
     * Lazily load the instance that has been proxied, but is now called upon.
     *
     * @return mixed|object The object that was proxied.
     */
    public function loadTheInstance();
}
