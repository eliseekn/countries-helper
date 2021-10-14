<?php

namespace Eliseekn\CountriesHelper;

use Illuminate\Support\ServiceProvider;

class CountriesHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('countries-helper.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'countries-helper');

        // Register the main class to use with the facade
        $this->app->singleton('countries-helper', function () {
            return new CountriesHelper;
        });
    }
}
