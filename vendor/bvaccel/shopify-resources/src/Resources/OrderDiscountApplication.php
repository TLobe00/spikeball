<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class OrderDiscountApplication
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $allocation_method
 * @property string $code
 * @property string $description
 * @property string $target_selection
 * @property string $target_type
 * @property string $title
 * @property string $type
 * @property string $value
 * @property string $value_type
 */
class OrderDiscountApplication extends ShopifyResource
{

    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('OrderDiscountApplication', [
            new BasicProperty('allocation_method', ['string']),
            new BasicProperty('code', ['string']),
            new BasicProperty('description', ['string']),
            new BasicProperty('target_selection', ['string']),
            new BasicProperty('target_type', ['string']),
            new BasicProperty('title', ['string']),
            new BasicProperty('type', ['string']),
            new BasicProperty('value', ['double', 'integer', 'string']),
            new BasicProperty('value_type', ['string']),
        ]);
    }
}