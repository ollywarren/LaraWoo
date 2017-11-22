<?php

namespace Ollywarren\Larawoo;

use Illuminate\Support\ServiceProvider;
use Ollywarren\LaraWoo\Services\WooCommerceService;

class LarawooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/larawoo.php' => config_path('larawoo.php'),]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Larawoo', WooCommerceService::class);
    }
}