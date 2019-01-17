<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class DiscountCode
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $code
 * @property string $created_at
 * @property string $updated_at
 * @property string $id
 * @property string $price_rule_id
 * @property int    $usage_count
 */
class DiscountCode extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('DiscountCode', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('price_rule_id', ['integer', 'string']),
            new BasicProperty('usage_count', ['integer']),
            new BasicProperty('code', ['string']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('updated_at', ['string']),
        ]);
    }
}