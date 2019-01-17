<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class LineItem
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property int    $fulfillable_quantity
 * @property int    $grams
 * @property int    $quantity
 * @property string $fulfillment_service
 * @property string $fulfillment_status
 * @property string $id
 * @property string $price
 * @property string $product_id
 * @property string $sku
 * @property string $title
 * @property string $variant_id
 * @property string $variant_title
 * @property string $vendor
 * @property string $name
 * @property string $total_discount
 * @property bool   $requires_shipping
 * @property bool   $gift_card
 * @property bool   $taxable
 * @property array  $properties
 * @property array  $tax_lines
 * @property array  $discount_allocations
 */
class LineItem extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('LineItem', [
            new BasicProperty('fulfillable_quantity', ['integer']),
            new BasicProperty('grams', ['integer']),
            new BasicProperty('quantity', ['integer']),
            new BasicProperty('requires_shipping', ['boolean']),
            new BasicProperty('gift_card', ['boolean']),
            new BasicProperty('taxable', ['boolean']),
            new BasicProperty('discount_allocations', ['array']),
            new BasicProperty('tax_lines', ['array']),
            new BasicProperty('properties', ['array']),
            new BasicProperty('fulfillment_service', ['string']),
            new BasicProperty('fulfillment_status', ['string']),
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('price', ['string', 'double', 'integer']),
            new BasicProperty('product_id', ['string']),
            new BasicProperty('sku', ['string']),
            new BasicProperty('title', ['string']),
            new BasicProperty('variant_id', ['string']),
            new BasicProperty('variant_title', ['string']),
            new BasicProperty('vendor', ['string']),
            new BasicProperty('name', ['string']),
            new BasicProperty('total_discount', ['string']),
        ]);
    }
}