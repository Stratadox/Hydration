<?php

namespace Stratadox\Hydration;

/**
 * Maps objects by providing access to the class name and property mappings.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface MapsObject
{
    /**
     * The fully qualified name of the class that is mapped.
     *
     * @return string
     */
    public function className() : string;

    /**
     * The mappings of the properties of the mapped class.
     *
     * @return MapsProperty[]
     */
    public function properties() : array;
}
