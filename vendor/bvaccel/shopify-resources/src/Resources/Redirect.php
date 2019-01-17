<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class Redirect
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property int    $id
 * @property string $path
 * @property string $target
 */
class Redirect extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Redirect', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('path', ['string']),
            new BasicProperty('target', ['string']),
        ]);
    }
}