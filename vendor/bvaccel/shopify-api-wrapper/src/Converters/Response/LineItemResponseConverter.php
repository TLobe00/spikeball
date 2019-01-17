<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\LineItem;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class LineItemResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class LineItemResponseConverter extends ResponseConverter
{

    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource|LineItem
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $line_item = new LineItem();
        $line_item->allowOverride();
        $line_item->fulfillable_quantity = $data->fulfillable_quantity ?? null;
        $line_item->grams                = $data->grams ?? null;
        $line_item->quantity             = $data->quantity ?? null;
        $line_item->fulfillment_service  = $data->fulfillment_service ?? null;
        $line_item->fulfillment_status   = $data->fulfillment_status ?? null;
        $line_item->id                   = $data->id ?? null;
        $line_item->price                = $data->price ?? null;
        $line_item->product_id           = $data->product_id ?? null;
        $line_item->sku                  = $data->sku ?? null;
        $line_item->title                = $data->title ?? null;
        $line_item->variant_id           = $data->variant_id ?? null;
        $line_item->variant_title        = $data->variant_title ?? null;
        $line_item->vendor               = $data->vendor ?? null;
        $line_item->name                 = $data->name ?? null;
        $line_item->total_discount       = $data->total_discount ?? null;
        $line_item->requires_shipping    = $data->requires_shipping ?? null;
        $line_item->gift_card            = $data->gift_card ?? null;
        $line_item->taxable              = $data->taxable ?? null;
        $line_item->properties           = $data->properties ?? [];
        $line_item->tax_lines            = $data->tax_lines ?? [];
        $line_item->discount_allocations = $data->discount_allocations ?? [];

        return $line_item;
    }
}