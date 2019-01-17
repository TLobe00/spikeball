<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ProductVariant;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class ProductVariantResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class ProductVariantResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource|ProductVariant
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $variant = new ProductVariant();
        $variant->allowOverride();

        $variant->id                  = $data->id ?? null;
        $variant->product_id          = $data->product_id ?? null;
        $variant->inventory_item_id   = $data->inventory_item_id ?? null;
        $variant->barcode             = $data->barcode ?? null;
        $variant->created_at          = $data->created_at ?? null;
        $variant->updated_at          = $data->updated_at ?? null;
        $variant->fulfillment_service = $data->fulfillment_service ?? null;
        $variant->weight_unit         = $data->weight_unit ?? null;
        $variant->option1             = $data->option1 ?? null;
        $variant->option2             = $data->option2 ?? null;
        $variant->option3             = $data->option3 ?? null;
        $variant->title               = $data->title ?? null;
        $variant->compare_at_price    = $data->compare_at_price ?? null;
        $variant->price               = (double)$data->price ?? null;
        $variant->inventory_quantity  = $data->inventory_quantity ?? null;
        $variant->weight              = $data->weight ?? null;
        $variant->grams               = $data->grams ?? null;
        $variant->position            = $data->position ?? null;
        $variant->taxable             = $data->taxable ?? null;
        $variant->sku                 = $data->sku ?? null;

        return $variant;
    }
}