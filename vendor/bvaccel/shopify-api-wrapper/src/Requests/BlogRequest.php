<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\BlogParameters;
use BVAccel\ShopifyApiWrapper\Responses\MultipleBlogResponse;
use BVAccel\ShopifyApiWrapper\Responses\NullResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleBlogResponse;
use BVAccel\ShopifyResources\Resources\Blog;

/**
 * Class BlogRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class BlogRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param BlogParameters $parameters
     * @return MultipleBlogResponse
     */
    public function all(?BlogParameters $parameters = null)
    {
        return new MultipleBlogResponse(
            $this->client->get("blogs.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * Create
     *
     * @param Blog $blog
     * @return SingleBlogResponse
     */
    public function create(Blog $blog)
    {
        return new SingleBlogResponse(
            $this->client->post("blogs.json", ['blog' => $blog->changedProperties()])
        );
    }

    /**
     * Find
     *
     * @param                   $blog_id
     * @param BlogParameters $parameters
     * @return SingleBlogResponse
     */
    public function find($blog_id, ?BlogParameters $parameters = null)
    {
        return new SingleBlogResponse(
            $this->client->get("blogs/$blog_id.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * Update
     *
     * @param         $blog_id
     * @param Blog $blog
     * @return SingleBlogResponse
     */
    public function update($blog_id, Blog $blog)
    {
        return new SingleBlogResponse($this->client->put("blogs/$blog_id.json", [
            'blog' => $blog->changedProperties(),
        ]));
    }

    /**
     * Delete
     *
     * @param $blog_id
     * @return NullResponse
     */
    public function delete($blog_id)
    {
        return new NullResponse($this->client->delete("blogs/$blog_id.json"));
    }
}
