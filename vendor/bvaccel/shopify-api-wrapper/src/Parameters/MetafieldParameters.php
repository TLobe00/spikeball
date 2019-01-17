<?php


namespace BVAccel\ShopifyApiWrapper\Parameters;


use BVAccel\ShopifyApiWrapper\Traits\Parameters\CreatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\KeyParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\NamespaceParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\UpdatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\ValueTypeParameterTrait;

class MetafieldParameters extends ParameterBuilder
{
    use SinceIdParameterTrait,
        CreatedAtParameterTrait,
        UpdatedAtParameterTrait,
        NamespaceParameterTrait,
        KeyParameterTrait,
        ValueTypeParameterTrait,
        FieldsParameterTrait;
}