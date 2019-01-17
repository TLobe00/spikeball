<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class ProductImage
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $id
 * @property string $product_id
 * @property int    $position
 * @property string $created_at
 * @property string $updated_at
 * @property int    $width
 * @property int    $height
 * @property string $src
 * @property array  $variant_ids
 */
class ProductImage extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('ProductImage', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('product_id', ['integer', 'string']),
            new BasicProperty('position', ['integer']),
            new BasicProperty('width', ['integer']),
            new BasicProperty('height', ['integer']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('src', ['string']),
            new BasicArrayProperty('variant_ids', ['integer', 'string']),
        ]);
    }
}