<?php

namespace Stratadox\Hydration;

interface Hydrates
{
    /**
     * Produces an object based on the data in the array.
     *
     * The class to instantiate must be known to the hydrator.
     * The recommended way of defining the hydrated class is passing it to the
     * constructor, either directly or through a @see MapsObject instance.
     *
     * @param array $input  The input data.
     * @return mixed|object The hydrated instance.
     */
    public function fromArray(array $input);
}
