<?php

namespace Wallacemyem\LaraTermii;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class LaraTermiiServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/termii.php' => config_path('termii.php'),
            ], 'termii-config');
        }
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Merge config
        $this->mergeConfigFrom(__DIR__ . '/../config/termii.php', 'termii');

        // Register the main class to use with the facade
        $this->app->singleton('lara-termii', function ($app) {
            return new LaraTermii(
                config('termii.api_key')
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<string>
     */
    public function provides(): array
    {
        return ['lara-termii'];
    }
}
