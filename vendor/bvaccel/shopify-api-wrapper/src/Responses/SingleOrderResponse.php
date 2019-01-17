<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\OrderResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\Order;

/**
 * Class SingleOrderResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class SingleOrderResponse extends SingleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|Order
     */
    public function order()
    {
        return $this->data;
    }

    /**
     * Response Data Parser
     *
     * @return ResponseConverter
     */
    protected function _getConverter(): ResponseConverter
    {
        return new OrderResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->order ?? null;
    }
}