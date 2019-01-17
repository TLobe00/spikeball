<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\ProductResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\Product;

/**
 * Class MultipleProductResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class MultipleProductResponse extends MultipleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource[]|Product[]
     */
    public function products()
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
        return new ProductResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->products ?? [];
    }
}