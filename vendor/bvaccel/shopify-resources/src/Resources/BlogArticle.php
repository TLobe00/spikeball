<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class BlogArticle
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $id
 * @property string $commentable
 * @property string $created_at
 * @property string $feedburner
 * @property string $feedburner_location
 * @property string $handle
 * @property Metafields
 * @property array  $tags
 * @property string $template_suffix
 * @property string $title
 * @property string $updated_at
 */
class BlogArticle extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('BlogArticle', [
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('author', ['string']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('body_html', ['string']),
            new BasicProperty('image', ['string']),
            new BasicProperty('handle', ['string']),
            new NestedResourceProperty('metafield', [Metafield::class]),
            new BasicArrayProperty('tags', ['string']),
            new BasicProperty('blog_id', ['string', 'integer']),
            new BasicProperty('published', ['boolean']),
            new BasicProperty('summary_html', ['string']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('published_at', ['string']),
            new BasicProperty('template_suffix', ['string']),
            new BasicProperty('title', ['string']),
            new BasicProperty('user_id', ['string', 'integer']),
        ]);
    }
}
