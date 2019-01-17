<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class SmartCollection
 *
 * @package BVAccel\ShopifyResources\Resources
 *
 * @property string     $attachment
 * @property string     $src
 * @property string     $alt
 * @property string|int $width
 * @property string|int $height
 * @property string     $created_at
 */
class SmartCollectionImage extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('SmartCollectionImage', [
            new BasicProperty('attachment', ['string']),
            new BasicProperty('src', ['string']),
            new BasicProperty('alt', ['string']),
            new BasicProperty('width', ['string', 'integer']),
            new BasicProperty('height', ['string', 'integer']),
            new BasicProperty('created_at', ['string']),
        ]);
    }
}