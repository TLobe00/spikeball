<?php

namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\CreatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\IdsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\UpdatedAtParameterTrait;

/**
 * Class CustomerParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class CustomerParameters extends ParameterBuilder
{
    use CreatedAtParameterTrait,
        FieldsParameterTrait,
        IdsParameterTrait,
        SinceIdParameterTrait,
        UpdatedAtParameterTrait;
}