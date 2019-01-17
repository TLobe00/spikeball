<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class PriceRule
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property integer $usage_limit
 * @property integer $value
 * @property string  $allocation_method
 * @property string  $created_at
 * @property string  $customer_selection
 * @property string  $ends_at
 * @property string  $id
 * @property string  $starts_at
 * @property string  $target_selection
 * @property string  $target_type
 * @property string  $title
 * @property string  $value_type
 * @property array   $entitled_collection_ids
 * @property array   $entitled_country_ids
 * @property array   $entitled_product_ids
 * @property array   $entitled_variant_ids
 * @property array   $prerequisite_customer_ids
 * @property array   $prerequisite_quantity_range
 * @property array   $prerequisite_saved_search_ids
 * @property array   $prerequisite_shipping_price_range
 * @property array   $prerequisite_subtotal_range
 * @property array   $prerequisite_product_ids
 * @property array   $prerequisite_variant_ids
 * @property array   $prerequisite_collection_ids
 * @property array   $prerequisite_to_entitlement_quantity_ratio
 * @property bool    $once_per_customer
 */
class PriceRule extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('PriceRule', [
            new BasicArrayProperty('entitled_collection_ids', ['integer', 'string']),
            new BasicArrayProperty('entitled_country_ids', ['integer', 'string']),
            new BasicArrayProperty('entitled_product_ids', ['integer', 'string']),
            new BasicArrayProperty('entitled_variant_ids', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_customer_ids', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_quantity_range', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_saved_search_ids', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_shipping_price_range', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_subtotal_range', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_product_ids', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_variant_ids', ['integer', 'string']),
            new BasicArrayProperty('prerequisite_collection_ids', ['integer', 'string']),
            new BasicProperty('title', ['string']),
            new BasicProperty('value', ['integer']),
            new BasicProperty('usage_limit', ['integer']),
            new BasicProperty('prerequisite_to_entitlement_quantity_ratio', ['integer']),
            new BasicProperty('once_per_customer', ['boolean']),
            new BasicProperty('allocation_method', ['string']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('customer_selection', ['string']),
            new BasicProperty('ends_at', ['string']),
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('starts_at', ['string']),
            new BasicProperty('target_selection', ['string']),
            new BasicProperty('target_type', ['string']),
            new BasicProperty('value_type', ['string']),
        ]);
    }
}