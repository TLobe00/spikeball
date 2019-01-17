<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class SmartCollection
 *
 * @package BVAccel\ShopifyResources\Resources
 *
 * @property string     $column
 * @property string     $relation
 * @property string|int $condition
 */
class SmartCollectionRule extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('SmartCollectionRule', [
            new BasicProperty('column', ['string']),
            new BasicProperty('relation', ['string']),
            new BasicProperty('condition', ['string', 'integer']),
        ]);
    }
}