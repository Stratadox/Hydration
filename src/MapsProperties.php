<?php

namespace Stratadox\Hydration;

use Closure;

/**
 * Maps objects by providing access to the class name and property mappings.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface MapsProperties
{
    /**
     * Fills the values of the object with the provided data.
     *
     * Used to write the data to the object properties using a setter during the
     * [@see Hydrates::fromArray() hydration process].
     *
     * @param object  $object
     * @param Closure $setter
     * @param array   $data
     */
    public function writeData($object, Closure $setter, array $data) : void;
}
