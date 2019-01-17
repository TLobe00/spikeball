<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class ProductVariant
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $barcode
 * @property string $created_at
 * @property string $updated_at
 * @property string $fulfillment_service
 * @property string $weight_unit
 * @property string $option1
 * @property string $option2
 * @property string $option3
 * @property string $title
 * @property double $compare_at_price
 * @property double $price
 * @property double $weight
 * @property string $id
 * @property int    $product_id
 * @property int    $inventory_item_id
 * @property int    $inventory_quantity
 * @property int    $grams
 * @property int    $position
 * @property bool   $taxable
 * @property string $sku
 */
class ProductVariant extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('ProductVariant', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('product_id', ['integer', 'string']),
            new BasicProperty('inventory_item_id', ['integer', 'string']),
            new BasicProperty('barcode', ['string']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('fulfillment_service', ['string', 'NULL']),
            new BasicProperty('weight_unit', ['string', 'NULL']),
            new BasicProperty('option1', ['string', 'NULL']),
            new BasicProperty('option2', ['string', 'NULL']),
            new BasicProperty('option3', ['string', 'NULL']),
            new BasicProperty('title', ['string', 'NULL']),
            new BasicProperty('price', ['double', 'NULL']),
            new BasicProperty('compare_at_price', ['double', 'string', 'NULL']),
            new BasicProperty('taxable', ['boolean', 'NULL']),
            new BasicProperty('inventory_quantity', ['integer', 'NULL']),
            new BasicProperty('weight', ['double', 'integer', 'NULL']),
            new BasicProperty('inventory_quantity', ['integer', 'NULL']),
            new BasicProperty('grams', ['integer', 'NULL']),
            new BasicProperty('position', ['integer', 'NULL']),
            new BasicProperty('sku', ['integer','string', 'NULL']),
        ]);
    }
}