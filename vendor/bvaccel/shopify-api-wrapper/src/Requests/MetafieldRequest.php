<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Parameters\MetafieldParameters;
use BVAccel\ShopifyResources\Resources\Metafield;
use BVAccel\ShopifyApiWrapper\Responses\MultipleMetafieldResponse;
use BVAccel\ShopifyApiWrapper\Responses\NullResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleMetafieldResponse;

class MetafieldRequest extends ShopifyRequest
{
    /**
     * @param MetafieldParameters|null $parameters
     * @return MultipleMetafieldResponse
     */
    public function all(?MetafieldParameters $parameters = null)
    {
        return new MultipleMetafieldResponse(
            $this->client->get("metafields.json", ($parameters ? $parameters->getParameters() : []))
        );
    }

    /**
     * @param Metafield $metafield
     * @return SingleMetafieldResponse
     */
    public function create(Metafield $metafield)
    {
        return new SingleMetafieldResponse(
            $this->client->post("metafields.json", [
                'metafield' => $metafield->changedProperties()
            ])
        );
    }

    /**
     * @param $metafield_id
     * @param Metafield $metafield
     * @return SingleMetafieldResponse
     */
    public function update($metafield_id, Metafield $metafield)
    {
        return new SingleMetafieldResponse(
            $this->client->put("metafields/$metafield_id.json", [
                'metafield' => $metafield->changedProperties()
            ])
        );
    }

    /**
     * @param $metafield_id
     * @return NullResponse
     */
    public function delete($metafield_id)
    {
        return new NullResponse(
            $this->client->delete("/metafields/$metafield_id.json")
        );
    }
}