<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceProperty;
use BVAccel\ShopifyResources\Resources\Properties\BasicArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class Blog
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $id
 * @property string $commentable
 * @property string $created_at
 * @property string $feedburner
 * @property string $feedburner_location
 * @property string $handle
 * @property Metafield
 * @property array  $tags
 * @property string $template_suffix
 * @property string $title
 * @property string $updated_at
 */
class Blog extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Blog', [
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('commentable', ['string']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('feedburner', ['string']),
            new BasicProperty('feedburner_location', ['string']),
            new BasicProperty('handle', ['string']),
            new NestedResourceProperty('metafield', [Metafield::class]),
            new BasicArrayProperty('tags', ['string']),
            new BasicProperty('template_suffix', ['string']),
            new BasicProperty('title', ['string']),
            new BasicProperty('updated_at', ['string']),
        ]);
    }
}
