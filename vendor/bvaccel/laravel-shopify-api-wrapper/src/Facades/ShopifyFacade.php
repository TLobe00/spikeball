<?php

namespace BVAccel\LaravelShopifyApiWrapper\Facades;


use Illuminate\Support\Facades\Facade;

class ShopifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shopify';
    }
}