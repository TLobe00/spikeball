<?php


namespace BVAccel\ShopifyApiWrapper\Parameters;


use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;

class TransactionParameters extends ParameterBuilder
{
    use SinceIdParameterTrait,
        FieldsParameterTrait;
}