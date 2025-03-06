<?php

namespace Wallacemyem\LaraTermii\Facades;

use Illuminate\Support\Facades\Facade;

class LaraTermii extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'lara-termii';
    }
}
