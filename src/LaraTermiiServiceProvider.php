<?php

namespace Wallacemyem\LaraTermii;

use Illuminate\Support\ServiceProvider;

class LaraTermiiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/termii.php', 'termii');

        $this->app->singleton('lara-termii', function ($app) {
            return new LaraTermii(config('termii.api_key'));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/termii.php' => config_path('termii.php'),
        ], 'config');
    }
}
