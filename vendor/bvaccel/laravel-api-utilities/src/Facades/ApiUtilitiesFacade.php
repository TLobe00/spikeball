<?php

namespace BVAccel\LaravelApiUtilities\Facades;


use Illuminate\Support\Facades\Facade;

class ApiUtilitiesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api-utilities';
    }
}