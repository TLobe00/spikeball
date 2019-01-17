<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;
use BVAccel\ShopifyResources\Resources\Properties\ResourceProperty;

/**
 * Class Product
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string           $body_html
 * @property string           $created_at
 * @property string           $handle
 * @property string           $id
 * @property string           $options
 * @property string           $product_type
 * @property string           $published_at
 * @property string           $published_scope
 * @property array            $tags
 * @property string           $template_suffix
 * @property string           $title
 * @property string           $updated_at
 * @property string           $vendor
 * @property string           $admin_graphql_api_id
 * @property ProductImage[]   $images
 * @property ProductVariant[] $variants
 *
 */
class Product extends ShopifyResource
{
    /**
     * Product constructor.
     *
     * @param array $data = [
     *                    'body_html' => '',
     *                    'created_at' => '',
     *                    'handle' => '',
     *                    'id' => '',
     *                    'product_type' => '',]
     */
    public function __construct($data = [])
    {
        parent::__construct($data);
    }


    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Product', [
            (new BasicProperty('id', ['integer', 'string']))->readOnly(),
            new BasicProperty('title', ['string']),
            new BasicProperty('body_html', ['string', 'NULL']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('updated_at', ['string']),
            new BasicArrayProperty('tags', ['string']),
            new BasicProperty('handle', ['string']),
            new BasicProperty('product_type', ['string']),
            new BasicProperty('published_at', ['string']),
            new BasicProperty('published_scope', ['string']),
            new BasicProperty('template_suffix', ['string']),
            new BasicProperty('admin_graphql_api_id', ['string']),
            new BasicProperty('vendor', ['string']),
            new NestedResourceArrayProperty('variants', [ProductVariant::class]),
            new NestedResourceArrayProperty('options', [ProductOption::class]),
            new NestedResourceArrayProperty('images', [ProductImage::class]),
        ]);
    }
}