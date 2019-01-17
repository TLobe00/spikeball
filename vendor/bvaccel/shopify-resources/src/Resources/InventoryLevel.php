<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class InventoryLevel
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property int    $available
 * @property int    $inventory_item_id
 * @property int    $location_id
 * @property int    $id
 * @property string $updated_at
 */
class InventoryLevel extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('InventoryLevel', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('location_id', ['integer', 'string']),
            new BasicProperty('inventory_item_id', ['integer', 'string']),
            new BasicProperty('available', ['integer']),
            new BasicProperty('updated_at', ['string']),
        ]);
    }
}