<?php

namespace paymentCm\Dohone;

use Illuminate\Support\ServiceProvider;

class DohoneServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'paymentcm');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'paymentcm');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/dohone.php', 'dohone');

        // Register the service the package provides.
        $this->app->singleton('dohone', function ($app) {
            return new Dohone;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['dohone'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/dohone.php' => config_path('dohone.php'),
        ], 'dohone.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/paymentcm'),
        ], 'dohone.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/paymentcm'),
        ], 'dohone.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/paymentcm'),
        ], 'dohone.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
