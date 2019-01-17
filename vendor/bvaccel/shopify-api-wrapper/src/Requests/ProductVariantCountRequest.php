<?php


namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Responses\CountResponse;

/**
 * Class ProductVariantCountRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class ProductVariantCountRequest extends ShopifyRequest
{
    /**
     * @param $product_id
     * @return CountResponse
     */
    public function all($product_id)
    {
        return new CountResponse(
            $this->client->get("products/$product_id/variants/count.json")
        );
    }
}