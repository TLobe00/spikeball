<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class ProductOption
 * @package BVAccel\ShopifyResources\Resources
 * @property string $name
 * @property array $values
 */
class ProductOption extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('ProductOption', [
            new BasicProperty('name', ['string']),
            new BasicArrayProperty('values', ['string', 'integer']),
        ]);
    }
}