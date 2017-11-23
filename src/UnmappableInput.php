<?php

namespace Stratadox\Hydration;

use Throwable;

/**
 * Exception which is thrown when the input to hydrate is not accepted by the
 * hydration mapping.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface UnmappableInput extends Throwable
{
}
