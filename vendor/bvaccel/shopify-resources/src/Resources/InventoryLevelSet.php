<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class InventoryLevelSet
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property int $location_id
 * @property int $inventory_item_id
 * @property int $available
 */
class InventoryLevelSet extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('InventoryLevelSet', [
            new BasicProperty('location_id', ['integer', 'string']),
            new BasicProperty('inventory_item_id', ['integer', 'string']),
            new BasicProperty('available', ['integer']),
        ]);
    }
}