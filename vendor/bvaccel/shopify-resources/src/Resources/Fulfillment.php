<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class Fulfillment
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $created_at
 * @property string $id
 * @property string $location_id
 * @property string $name
 * @property string $order_id
 * @property string $service
 * @property string $shipment_status
 * @property string $status
 * @property string $tracking_company
 * @property string $updated_at
 * @property string $variant_inventory_management
 * @property array  $line_items
 * @property array  $receipt
 * @property array  $tracking_numbers
 * @property array  $tracking_urls
 * @property bool   $notify_customer
 */
class Fulfillment extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Fulfillment', [
            new BasicProperty('line_items', ['array']),
            new BasicProperty('receipt', ['array']),
            new BasicProperty('tracking_numbers', ['array']),
            new BasicProperty('tracking_urls', ['array']),
            new BasicProperty('notify_customer', ['boolean']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('id', ['string']),
            new BasicProperty('location_id', ['string']),
            new BasicProperty('name', ['string']),
            new BasicProperty('order_id', ['string']),
            new BasicProperty('service', ['string']),
            new BasicProperty('shipment_status', ['string']),
            new BasicProperty('status', ['string']),
            new BasicProperty('tracking_company', ['string']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('variant_inventory_management', ['string']),
        ]);
    }
}