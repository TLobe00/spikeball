<?php


namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Responses\CountResponse;

/**
 * Class ProductCountRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class ProductCountRequest extends ShopifyRequest
{
    /**
     * @return CountResponse
     */
    public function all()
    {
        return new CountResponse(
            $this->client->get("products/count.json")
        );
    }
}