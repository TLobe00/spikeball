<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class InventoryItem
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string  $created_at
 * @property string  $updated_at
 * @property string  $sku
 * @property int     $id
 * @property boolean $tracked
 */
class InventoryItem extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('InventoryItem', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('tracked', ['boolean']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('sku', ['string']),
        ]);
    }
}