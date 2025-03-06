<?php

namespace Wallacemyem\LaraTermii;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed send(array $params)
 * @method static mixed balance()
 * @method static mixed verify(string $pinId, string $pin)
 * 
 * @see \Wallacemyem\LaraTermii\LaraTermii
 */
class LaraTermiiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'lara-termii';
    }
}
