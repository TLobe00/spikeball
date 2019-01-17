<?php


namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;

/**
 * Class ProductImageParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class ProductImageParameters extends ParameterBuilder
{
    use FieldsParameterTrait, SinceIdParameterTrait;
}