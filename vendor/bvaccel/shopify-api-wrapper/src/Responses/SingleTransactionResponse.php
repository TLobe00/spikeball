<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\TransactionResponseConverter;

class SingleTransactionResponse extends SingleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource
     */
    public function transaction()
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
        return new TransactionResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->transaction;
    }
}