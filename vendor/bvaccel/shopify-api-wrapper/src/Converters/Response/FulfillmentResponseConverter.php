<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\Fulfillment;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class FulfillmentResponseConverter
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class FulfillmentResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $fulfillment = new Fulfillment();
        $fulfillment->allowOverride();
        $fulfillment->created_at                   = $data->created_at ?? null;
        $fulfillment->id                           = $data->id ?? null;
        $fulfillment->location_id                  = $data->location_id ?? null;
        $fulfillment->name                         = $data->name ?? null;
        $fulfillment->order_id                     = $data->order_id ?? null;
        $fulfillment->service                      = $data->service ?? null;
        $fulfillment->shipment_status              = $data->shipment_status ?? null;
        $fulfillment->status                       = $data->status ?? null;
        $fulfillment->tracking_company             = $data->tracking_company ?? null;
        $fulfillment->updated_at                   = $data->updated_at ?? null;
        $fulfillment->variant_inventory_management = $data->variant_inventory_management ?? null;
        $fulfillment->line_items                   = $data->line_items ?? null;
        $fulfillment->receipt                      = $data->receipt ?? null;
        $fulfillment->tracking_numbers             = $data->tracking_numbers ?? null;
        $fulfillment->tracking_urls                = $data->tracking_urls ?? null;
        $fulfillment->notify_customer              = $data->notify_customer ?? null;

        return $fulfillment;
    }
}