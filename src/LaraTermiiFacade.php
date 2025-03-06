<?php

namespace Wallacemyem\LaraTermii;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wallacemyem\LaraTermii\Skeleton\SkeletonClass
 */
class LaraTermiiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lara-termii';
    }
}
