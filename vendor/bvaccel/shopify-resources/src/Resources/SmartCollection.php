<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class SmartCollection
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string                $body_html
 * @property string                $handle
 * @property string|int            $id
 * @property string                $published_at
 * @property string                $published_scope
 * @property bool                  $disjunctive
 * @property string                $template_suffix
 * @property string                $sort_order
 * @property string                $title
 * @property string                $updated_at
 * @property SmartCollectionImage  $image
 * @property SmartCollectionRule[] $rules
 */
class SmartCollection extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('SmartCollection', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('body_html', ['string', 'NULL']),
            new BasicProperty('handle', ['string', 'NULL']),
            new BasicProperty('published_at', ['string', 'NULL']),
            new BasicProperty('disjunctive', ['boolean', 'NULL']),
            new BasicProperty('template_suffix', ['string', 'NULL']),
            new BasicProperty('sort_order', ['string', 'integer', 'NULL']),
            new BasicProperty('title', ['string', 'NULL']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('published_scope', ['string', 'NULL']),
            new NestedResourceProperty('image', [SmartCollectionImage::class]),
            new NestedResourceArrayProperty('rules', [SmartCollectionRule::class]),
        ]);
    }
}