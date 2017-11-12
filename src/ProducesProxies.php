<?php

namespace Stratadox\Hydration;

interface ProducesProxies
{
    /**
     * Produce a proxy and (optionally) bind it to the property of an object.
     *
     * @todo Split into owned and standalone proxy producers
     *
     * @param object|null       $theOwner      The object this proxy gets bound to.
     * @param string|null       $ofTheProperty The property this proxy gets bound to.
     * @param string|int|null   $atPosition    The position of the proxy in the collection.
     * @return object
     */
    public function createFor($theOwner = null, string $ofTheProperty = null, $atPosition = null);
}
