<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Parameters\MetafieldParameters;
use BVAccel\ShopifyResources\Resources\Metafield;
use BVAccel\ShopifyApiWrapper\Responses\MultipleMetafieldResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleMetafieldResponse;

class ProductMetafieldRequest extends ShopifyRequest
{
    /**
     * @param $product_id
     * @param MetafieldParameters $parameters
     * @return MultipleMetafieldResponse
     */
    public function all($product_id, ?MetafieldParameters $parameters = null)
    {
        return new MultipleMetafieldResponse(
            $this->client->get("products/$product_id/metafields.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param $product_id
     * @param $metafield_id
     * @return SingleMetafieldResponse
     */
    public function find($product_id, $metafield_id)
    {
        return new SingleMetafieldResponse($this->client->get("products/$product_id/metafields/$metafield_id.json"));
    }

    /**
     * @param $product_id
     * @param Metafield $metafield
     * @return SingleMetafieldResponse
     */
    public function create($product_id, Metafield $metafield)
    {
        return new SingleMetafieldResponse(
            $this->client->post("products/$product_id/metafields.json", [
                'metafield' => $metafield->changedProperties()
            ])
        );
    }

    /**
     * @param $product_id
     * @param $metafield_id
     * @param Metafield $metafield
     * @return SingleMetafieldResponse
     */
    public function update($product_id, $metafield_id, Metafield $metafield)
    {
        return new SingleMetafieldResponse(
            $this->client->put("products/$product_id/metafields/$metafield_id.json", [
                'metafields' => $metafield->changedProperties()
            ])
        );
    }
}