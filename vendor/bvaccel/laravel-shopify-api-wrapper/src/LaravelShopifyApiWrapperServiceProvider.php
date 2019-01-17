<?php

namespace BVAccel\LaravelShopifyApiWrapper;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use BVAccel\ShopifyApiWrapper\Coordinators\ResourceCoordinator;
use BVAccel\ShopifyApiWrapper\StoreConfig;

class LaravelShopifyApiWrapperServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('shopify', function ($app){

            $primary_config = Config::get('shopify.stores.primary');
            $primary = new StoreConfig($primary_config['domain'], $primary_config['key'], $primary_config['password']);

            return new ResourceCoordinator($primary, ['primary' => $primary]);
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
            __DIR__ . '/../resources/config/shopify.php' => config_path('shopify.php'),
        ]);
    }
}