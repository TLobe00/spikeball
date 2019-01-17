<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Parameters\MetafieldParameters;
use BVAccel\ShopifyResources\Resources\Metafield;
use BVAccel\ShopifyApiWrapper\Responses\MultipleMetafieldResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleMetafieldResponse;

class BlogArticleMetafieldRequest extends ShopifyRequest
{
    /**
     * @param $blog_id
     * @param MetafieldParameters $parameters
     * @return MultipleMetafieldResponse
     */
    public function all($blog_id, ?MetafieldParameters $parameters = null)
    {
        return new MultipleMetafieldResponse(
            $this->client->get("blogs/$blog_id/metafields.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param $blog_id
     * @param $blogarticle_id
     * @param $metafield_id
     * @return SingleMetafieldResponse
     */
    public function find($blog_id, $blogarticle_id, $metafield_id)
    {
        return new SingleMetafieldResponse($this->client->get("blogs/$blog_id/articles/$blogarticle_id/metafields/$metafield_id.json"));
    }

    /**
     * @param $blog_id
     * @param $blogarticle_id
     * @param Metafield $metafield
     * @return SingleMetafieldResponse
     */
    public function create($blog_id, $blogarticle_id, Metafield $metafield)
    {
        return new SingleMetafieldResponse(
            $this->client->post("blogs/$blog_id/articles/$blogarticle_id/metafields.json", [
                'metafield' => $metafield->changedProperties()
            ])
        );
    }

    /**
     * @param $blog_id
     * @param $blogarticle_id
     * @param $metafield_id
     * @param Metafield $metafield
     * @return SingleMetafieldResponse
     */
    public function update($blog_id, $blogarticle_id, $metafield_id, Metafield $metafield)
    {
        return new SingleMetafieldResponse(
            $this->client->put("blogs/$blog_id/articles/$blogarticle_id/metafields/$metafield_id.json", [
                'metafields' => $metafield->changedProperties()
            ])
        );
    }
}
