<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\OrderParameters;
use BVAccel\ShopifyResources\Resources\Order;
use BVAccel\ShopifyApiWrapper\Responses\MultipleOrderResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleOrderResponse;

class OrderRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param OrderParameters|null $parameters
     * @return MultipleOrderResponse
     */
    public function all(?OrderParameters $parameters = null)
    {
        return new MultipleOrderResponse(
            $this->client->get("orders.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * Create
     *
     * @param Order $order
     * @return SingleOrderResponse
     */
    public function create(Order $order)
    {
        return new SingleOrderResponse(
            $this->client->post("orders.json", ['order' => $order->changedProperties()])
        );
    }

    /**
     * Find
     *
     * @param $order_id
     * @return SingleOrderResponse
     */
    public function find($order_id)
    {
        return new SingleOrderResponse(
            $this->client->get("orders/$order_id.json")
        );
    }

    /**
     * Update
     *
     * @param       $order_id
     * @param Order $order
     * @return SingleOrderResponse
     */
    public function update($order_id, Order $order)
    {
        return new SingleOrderResponse(
            $this->client->put("orders/$order_id.json", ['order' => $order->changedProperties()])
        );
    }

    public function destroy($order_id)
    {
        #todo
    }
}