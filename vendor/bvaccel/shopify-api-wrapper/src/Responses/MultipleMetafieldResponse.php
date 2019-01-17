<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\MetafieldResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\Metafield;

class MultipleMetafieldResponse extends MultipleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource[]|Metafield[]
     */
    public function metafields()
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
        return new MetafieldResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->metafields ?? [];
    }
}