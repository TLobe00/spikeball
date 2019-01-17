<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Responses\CountResponse;

/**
 * Class OrderTransactionCountRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class OrderTransactionCountRequest extends ShopifyRequest
{
    /**
     * @param $order_id
     * @return CountResponse
     */
    public function all($order_id)
    {
        return new CountResponse($this->client->get("orders/$order_id/transactions/count.json"));
    }
}