<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Responses\CountResponse;

/**
 * Class OrderCountRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class OrderCountRequest extends ShopifyRequest
{
    /**
     * @return CountResponse
     */
    public function all()
    {
        return new CountResponse(
            $this->client->get("orders/count.json")
        );
    }
}