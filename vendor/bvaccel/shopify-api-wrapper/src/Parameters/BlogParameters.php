<?php

namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\HandleParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;

/**
 * Class BlogParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class BlogParameters extends ParameterBuilder
{
    use FieldsParameterTrait,
        HandleParameterTrait,
        SinceIdParameterTrait,
}
