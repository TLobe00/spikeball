<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\BlogResponseConverter;
use BVAccel\ShopifyResources\Resources\Blog;

class SingleBlogResponse extends SingleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|Blog
     */
    public function blog()
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
        return new BlogResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body->blog ?? null;
    }
}
