<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Responses\CountResponse;

/**
 * Class CustomerCountRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class CustomerCountRequest extends ShopifyRequest
{
    /**
     * @return CountResponse
     */
    public function all()
    {
        return new CountResponse(
            $this->client->get("customers/count.json")
        );
    }
}