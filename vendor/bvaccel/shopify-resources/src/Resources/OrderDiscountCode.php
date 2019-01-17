<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class OrderDiscountCode
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $amount
 * @property string $code
 * @property string $type
 */
class OrderDiscountCode extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('OrderDiscountCode', [
            new BasicProperty('code', ['string']),
            new BasicProperty('amount', ['double', 'string', 'integer']),
            new BasicProperty('type', ['string']),
        ]);
    }
}