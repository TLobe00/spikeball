<?php

namespace BVAccel\LaravelApiUtilities;

use Illuminate\Support\ServiceProvider;

class LaravelApiUtilitiesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('api-utilities', function ($app){
            return new Utilities($app);
        });
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/config/api-utilities.php' => config_path('api-utilities.php'),
        ]);
    }
}