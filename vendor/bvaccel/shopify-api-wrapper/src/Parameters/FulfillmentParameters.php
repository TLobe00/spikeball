<?php


namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\CreatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\UpdatedAtParameterTrait;

/**
 * Class FulfillmentParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class FulfillmentParameters extends ParameterBuilder
{
    use CreatedAtParameterTrait,
        FieldsParameterTrait,
        SinceIdParameterTrait,
        UpdatedAtParameterTrait;
}