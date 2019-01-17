<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\ProductImageResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\ProductImage;

/**
 * Class SingleProductImageResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class SingleProductImageResponse extends SingleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|ProductImage
     */
    public function image()
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
        return new ProductImageResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->image ?? null;
    }
}