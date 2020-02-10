<?php

namespace Zaratedev\LaravelTinkerServer;

use Illuminate\Support\ServiceProvider;
use Zaratedev\LaravelTinkerServer\Console\TinkerServerCommand;

class LaravelTinkerServerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laraveltinkerserver.php'),
            ], 'config');

            // Registering package commands.
            $this->commands([
                TinkerServerCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laraveltinkerserver');

        // Register the main class to use with the facade
        $this->app->singleton('laraveltinkerserver', function () {
            return new LaravelTinkerServer;
        });
    }
}
