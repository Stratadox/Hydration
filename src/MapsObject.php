<?php

namespace Stratadox\Hydration;

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
