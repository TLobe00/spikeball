<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\FulfillmentParameters;
use BVAccel\ShopifyResources\Resources\Fulfillment;
use BVAccel\ShopifyApiWrapper\Responses\MultipleFulfillmentResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleFulfillmentResponse;

class OrderFulfillmentRequest extends ShopifyRequest
{
    /**
     * @param                            $order_id
     * @param FulfillmentParameters|null $parameters
     * @return MultipleFulfillmentResponse
     */
    public function all($order_id, ?FulfillmentParameters $parameters = null)
    {
        return new MultipleFulfillmentResponse(
            $this->client->get("orders/$order_id/fulfillments.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param             $order_id
     * @param Fulfillment $fulfillment
     * @return SingleFulfillmentResponse
     */
    public function create($order_id, Fulfillment $fulfillment)
    {
        return new SingleFulfillmentResponse(
            $this->client->post("orders/$order_id/fulfillments.json", ['fulfillment' => $fulfillment->changedProperties()])
        );
    }

    /**
     * @param $order_id
     * @param $fulfillment_id
     * @return SingleFulfillmentResponse
     */
    public function find($order_id, $fulfillment_id)
    {
        return new SingleFulfillmentResponse(
            $this->client->get("orders/$order_id/fulfillments/$fulfillment_id.json")
        );
    }

    /**
     * @param             $order_id
     * @param             $fulfillment_id
     * @param Fulfillment $fulfillment
     * @return SingleFulfillmentResponse
     */
    public function update($order_id, $fulfillment_id, Fulfillment $fulfillment)
    {
        return new SingleFulfillmentResponse(
            $this->client->put("orders/$order_id/fulfillments/$fulfillment_id", [
                'fulfillments' => $fulfillment->changedProperties(),
            ])
        );
    }
}