<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Responses\CountResponse;

/**
 * Class OrderFulfillmentCountRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class OrderFulfillmentCountRequest extends ShopifyRequest
{
    /**
     * @param $order_id
     * @return CountResponse
     */
    public function all($order_id)
    {
        return new CountResponse(
            $this->client->get("orders/$order_id/fulfillments/count.json")
        );
    }
}