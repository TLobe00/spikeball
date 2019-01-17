<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\BlogArticleParameters;
use BVAccel\ShopifyResources\Resources\BlogArticle;
use BVAccel\ShopifyApiWrapper\Responses\MultipleBlogArticleResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleBlogArticleResponse;

/**
 * Class BlogArticleRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class BlogArticleRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param                               $blog_id
     * @param BlogArticleParameters|null $parameters
     * @return MultipleBlogArticleResponse
     */
    public function all($blog_id, ?BlogArticleParameters $parameters = null)
    {
        return new MultipleBlogArticleResponse(
            $this->client->get("blogs/$blog_id/articles.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * Create
     *
     * @param                $blog_id
     * @param BlogArticle $blogarticle
     * @return SingleBlogArticleResponse
     */
    public function create($blog_id, BlogArticle $blogarticle)
    {
        return new SingleBlogArticleResponse(
            $this->client->post("blogs/$blog_id/articles.json", [
                'article' => $blogarticle->changedProperties(),
            ])
        );
    }

    /**
     * Find
     *
     * @param $blog_id
     * @param $blogarticle_id
     * @return SingleBlogArticleResponse
     */
    public function find($blog_id, $blogarticle_id)
    {
        return new SingleBlogArticleResponse(
            $this->client->get("blogs/$blog_id/articles/$blogarticle_id.json")
        );
    }

    /**
     * Update
     *
     * @param                $blog_id
     * @param                $blogarticle_id
     * @param BlogArticle $blogarticle
     * @return SingleBlogArticleResponse
     */
    public function update($blog_id, $blogarticle_id, BlogArticle $blogarticle)
    {
        return new SingleBlogArticleResponse(
            $this->client->put("blogs/$blog_id/articles/$blogarticle_id.json", [
                'article' => $blogarticle->changedProperties(),
            ])
        );
    }

    /**
     * Delete
     *
     * @param $blog_id
     * @param $blogarticle_id
     * @return NullResponse
     */
    public function delete($blog_id, $blogarticle_id)
    {
        return new NullResponse($this->client->delete("blogs/$blog_id/articles/$blogarticle_id.json"));
    }
}
