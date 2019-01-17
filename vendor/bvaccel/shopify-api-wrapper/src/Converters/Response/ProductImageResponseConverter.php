<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ProductImage;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class ProductImageResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class ProductImageResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource|ProductImage
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $image = new ProductImage();
        $image->allowOverride();

        $image->id         = $data->id;
        $image->product_id = $data->product_id ?? null;
        $image->position   = $data->position ?? null;
        $image->created_at = $data->created_at ?? null;
        $image->updated_at = $data->updated_at ?? null;
        $image->width      = $data->width ?? null;
        $image->height     = $data->height ?? null;
        $image->src        = $data->src ?? null;

        return $image;
    }
}