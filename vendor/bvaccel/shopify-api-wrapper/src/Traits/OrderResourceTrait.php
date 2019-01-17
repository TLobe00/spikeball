<?php


namespace BVAccel\ShopifyApiWrapper\Traits;


use BVAccel\ShopifyApiWrapper\Requests\OrderCountRequest;
use BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentCancelRequest;
use BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentCompleteRequest;
use BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentOpenRequest;
use BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentRequest;
use BVAccel\ShopifyApiWrapper\Requests\OrderRequest;
use BVAccel\ShopifyApiWrapper\Requests\OrderTransactionCountRequest;
use BVAccel\ShopifyApiWrapper\Requests\OrderTransactionRequest;

trait OrderResourceTrait
{
    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderRequest
     */
    public function order()
    {
        return new OrderRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderCountRequest
     */
    public function orderCount()
    {
        return new OrderCountRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentRequest
     */
    public function orderFulfillment()
    {
        return new OrderFulfillmentRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentOpenRequest
     */
    public function orderFulfillmentOpen()
    {
        return new OrderFulfillmentOpenRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentCancelRequest
     */
    public function orderFulfillmentCancel()
    {
        return new OrderFulfillmentCancelRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderFulfillmentCompleteRequest
     */
    public function orderFulfillmentComplete()
    {
        return new OrderFulfillmentCompleteRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderTransactionRequest
     */
    public function orderTransaction()
    {
        return new OrderTransactionRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\OrderTransactionCountRequest
     */
    public function orderTransactionCount()
    {
        return new OrderTransactionCountRequest($this->client);
    }
}