<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Responses\CountResponse;

/**
 * Class ProductImageCountRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class ProductImageCountRequest extends ShopifyRequest
{
    /**
     * @param $product_id
     * @return CountResponse
     */
    public function all($product_id)
    {
        return new CountResponse(
            $this->client->get("products/$product_id/images/count.json")
        );
    }
}