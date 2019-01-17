<?php

namespace BVAccel\ShopifyApiWrapper\Parameters;


use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\QueryParameterTrait;

/**
 * Class CustomerParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class CustomerSearchParameters extends ParameterBuilder
{
    use FieldsParameterTrait;
    use QueryParameterTrait;
}