<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\ProductParameters;
use BVAccel\ShopifyApiWrapper\Responses\MultipleProductResponse;
use BVAccel\ShopifyApiWrapper\Responses\NullResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleProductResponse;
use BVAccel\ShopifyResources\Resources\Product;

/**
 * Class ProductRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class ProductRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param ProductParameters $parameters
     * @return MultipleProductResponse
     */
    public function all(?ProductParameters $parameters = null)
    {
        return new MultipleProductResponse(
            $this->client->get("products.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * Create
     *
     * @param Product $product
     * @return SingleProductResponse
     */
    public function create(Product $product)
    {
        return new SingleProductResponse(
            $this->client->post("products.json", ['product' => $product->changedProperties()])
        );
    }

    /**
     * Find
     *
     * @param                   $product_id
     * @param ProductParameters $parameters
     * @return SingleProductResponse
     */
    public function find($product_id, ?ProductParameters $parameters = null)
    {
        return new SingleProductResponse(
            $this->client->get("products/$product_id.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * Update
     *
     * @param         $product_id
     * @param Product $product
     * @return SingleProductResponse
     */
    public function update($product_id, Product $product)
    {
        return new SingleProductResponse($this->client->put("products/$product_id.json", [
            'product' => $product->changedProperties(),
        ]));
    }

    /**
     * Delete
     *
     * @param $product_id
     * @return NullResponse
     */
    public function delete($product_id)
    {
        return new NullResponse($this->client->delete("products/$product_id.json"));
    }
}