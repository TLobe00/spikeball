<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\ProductImageParameters;
use BVAccel\ShopifyResources\Resources\ProductImage;
use BVAccel\ShopifyApiWrapper\Responses\MultipleProductImageResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleProductImageResponse;

/**
 * Class ProductImageRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class ProductImageRequest extends ShopifyRequest
{
    /**
     * @param                             $product_id
     * @param ProductImageParameters|null $parameters
     * @return MultipleProductImageResponse
     */
    public function all($product_id, ?ProductImageParameters $parameters = null)
    {
        return new MultipleProductImageResponse(
            $this->client->get("products/$product_id/images.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param              $product_id
     * @param ProductImage $image
     * @return SingleProductImageResponse
     */
    public function create($product_id, ProductImage $image)
    {
        return new SingleProductImageResponse(
            $this->client->post("products/$product_id/images.json", [
                'image' => $image->changedProperties(),
            ])
        );
    }

    /**
     * @param $product_id
     * @param $image_id
     * @return SingleProductImageResponse
     */
    public function find($product_id, $image_id)
    {
        return new SingleProductImageResponse(
            $this->client->get("products/$product_id/images/$image_id.json")
        );
    }

    /**
     * @param              $product_id
     * @param              $image_id
     * @param ProductImage $image
     * @return SingleProductImageResponse
     */
    public function update($product_id, $image_id, ProductImage $image)
    {
        return new SingleProductImageResponse(
            $this->client->put("products/$product_id/images/$image_id.json", [
                'image' => $image->changedProperties(),
            ])
        );
    }
}