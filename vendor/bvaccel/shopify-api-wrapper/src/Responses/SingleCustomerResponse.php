<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\CustomerResponseConverter;
use BVAccel\ShopifyResources\Resources\Customer;

class SingleCustomerResponse extends SingleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|Customer
     */
    public function customer()
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
        return new CustomerResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body->customer ?? null;
    }
}