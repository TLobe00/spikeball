<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\ProductVariantParameters;
use BVAccel\ShopifyResources\Resources\ProductVariant;
use BVAccel\ShopifyApiWrapper\Responses\MultipleProductVariantResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleProductVariantResponse;

/**
 * Class ProductVariantRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class ProductVariantRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param                               $product_id
     * @param ProductVariantParameters|null $parameters
     * @return MultipleProductVariantResponse
     */
    public function all($product_id, ?ProductVariantParameters $parameters = null)
    {
        return new MultipleProductVariantResponse(
            $this->client->get("products/$product_id/variants.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * Create
     *
     * @param                $product_id
     * @param ProductVariant $variant
     * @return SingleProductVariantResponse
     */
    public function create($product_id, ProductVariant $variant)
    {
        return new SingleProductVariantResponse(
            $this->client->post("products/$product_id/variants.json", [
                'variant' => $variant->changedProperties(),
            ])
        );
    }

    /**
     * Find
     *
     * @param $product_id
     * @param $variant_id
     * @return SingleProductVariantResponse
     */
    public function find($product_id, $variant_id)
    {
        return new SingleProductVariantResponse(
            $this->client->get("products/$product_id/variants/$variant_id.json")
        );
    }

    /**
     * Update
     *
     * @param                $product_id
     * @param                $variant_id
     * @param ProductVariant $variant
     * @return SingleProductVariantResponse
     */
    public function update($product_id, $variant_id, ProductVariant $variant)
    {
        return new SingleProductVariantResponse(
            $this->client->put("products/$product_id/variants/$variant_id.json", [
                'variant' => $variant->changedProperties(),
            ])
        );
    }
}