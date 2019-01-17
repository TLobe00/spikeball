<?php


namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\CollectionIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\CreatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\HandleParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\IdsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\LimitParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\PageParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\ProductTypeParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\PublishedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\PublishedStatusParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\TitleParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\UpdatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\VendorParameterTrait;


/**
 * Class ProductParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class ProductParameters extends ParameterBuilder
{
    use CollectionIdParameterTrait,
        CreatedAtParameterTrait,
        FieldsParameterTrait,
        HandleParameterTrait,
        IdsParameterTrait,
        LimitParameterTrait,
        PageParameterTrait,
        ProductTypeParameterTrait,
        PublishedAtParameterTrait,
        PublishedStatusParameterTrait,
        SinceIdParameterTrait,
        TitleParameterTrait,
        UpdatedAtParameterTrait,
        VendorParameterTrait;
}