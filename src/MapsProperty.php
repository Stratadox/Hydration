<?php

namespace Stratadox\Hydration;

interface MapsProperty
{
    /**
     * The name of the property.
     *
     * Used to determine which object property to write to during the
     * [@see Hydrates::fromArray() hydration process].
     *
     * @return string   Name of the attribute.
     */
    public function name() : string;

    /**
     * Determines the attribute's value based on the hydration data.
     *
     * Used to determine what to write to the object property during the
     * [@see Hydrates::fromArray() hydration process].
     *
     * @param array         $data   Hydration data.
     * @param object|null   $owner  The owner of the property.
     * @return mixed                Value to assign to the property.
     */
    public function value(array $data, $owner = null);
}
