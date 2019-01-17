<?php

namespace BVAccel\ShopifyApiWrapper\Traits;

use BVAccel\ShopifyApiWrapper\Parameters\ProductParameters;
use BVAccel\ShopifyApiWrapper\Requests\ProductCountRequest;
use BVAccel\ShopifyApiWrapper\Requests\ProductImageRequest;
use BVAccel\ShopifyApiWrapper\Requests\ProductMetafieldRequest;
use BVAccel\ShopifyApiWrapper\Requests\ProductRequest;
use BVAccel\ShopifyApiWrapper\Requests\ProductVariantRequest;
use BVAccel\ShopifyApiWrapper\Requests\SmartCollectionRequest;

trait ProductResourceTrait
{
    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\ProductRequest
     */
    public function product()
    {
        return new ProductRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\ProductCountRequest
     */
    public function productCount()
    {
        return new ProductCountRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Parameters\ProductParameters
     */
    public function productParams()
    {
        return new ProductParameters();
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\ProductImageRequest
     */
    public function productImage()
    {
        return new ProductImageRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\ProductVariantRequest
     */
    public function productVariant()
    {
        return new ProductVariantRequest($this->client);
    }

    /**
     * Smart Collection
     *
     * @return \BVAccel\ShopifyApiWrapper\Requests\SmartCollectionRequest
     */
    public function smartCollection()
    {
        return new SmartCollectionRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\ProductMetafieldRequest
     */
    public function productMetafield()
    {
        return new ProductMetafieldRequest($this->client);
    }
}