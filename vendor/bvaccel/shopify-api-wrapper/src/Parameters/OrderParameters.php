<?php

namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\AttributeAppIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\CreatedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\FieldsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\FinancialStatusParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\FulfillmentStatusParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\IdsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\ProcessedAtParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\SinceIdParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\StatusParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\UpdatedAtParameterTrait;

/**
 * Class OrderParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class OrderParameters extends ParameterBuilder
{
    use AttributeAppIdParameterTrait,
        CreatedAtParameterTrait,
        FieldsParameterTrait,
        FinancialStatusParameterTrait,
        FulfillmentStatusParameterTrait,
        IdsParameterTrait,
        ProcessedAtParameterTrait,
        SinceIdParameterTrait,
        StatusParameterTrait,
        UpdatedAtParameterTrait;
}