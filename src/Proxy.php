<?php

namespace Stratadox\Hydration;

interface Proxy
{
    public const LOADER    = 'proxyInstanceLoader';
    public const SETTER    = 'proxyOwnerUpdater';
    public const OWNER     = 'proxyOwner';
    public const PROPERTY  = 'proxyIsReferencedBy';
    public const OFFSET    = 'proxyIsLocatedAtOffset';

    /**
     * Lazily load and return the proxied object.
     *
     * @return object
     */
    public function load();
}
