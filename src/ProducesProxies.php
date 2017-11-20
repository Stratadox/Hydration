<?php

namespace Stratadox\Hydration;

interface ProducesProxies
{
    /**
     * Produce a @see Proxy as temporary value for the property of an object.
     *
     * @param object          $theOwner      The object this proxy gets bound to.
     * @param string          $ofTheProperty The property this proxy gets bound to.
     * @param string|int|null $atPosition    The position of the proxy in the collection.
     * @return Proxy                         The produced proxy.
     */
    public function createFor(
        $theOwner,
        string $ofTheProperty,
        $atPosition = null
    ) : Proxy;
}
