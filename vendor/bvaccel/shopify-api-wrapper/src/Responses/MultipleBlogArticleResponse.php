<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\BlogArticleResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;

class MultipleBlogArticleResponse extends MultipleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource[]
     */
    public function blogarticles()
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
        return new BlogArticleResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->blogarticles ?? [];
    }
}
