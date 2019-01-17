<?php


namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;

/**
 * Class ProductVariantParameters
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class ProductVariantParameters extends ParameterBuilder
{
    use FieldsParameterTrait, SinceIdParameterTrait;
}