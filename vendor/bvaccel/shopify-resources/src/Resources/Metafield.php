<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class Metafield
 *
 * @package SerenityNow\Shopify\src\ShopifyResources
 * @property string $id
 * @property string $key
 * @property string $namespace
 * @property string $owner_id
 * @property string $owner_resource
 * @property string $value
 * @property string $value_type;
 */
class Metafield extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Metafield', [
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('key', ['string', 'integer']),
            new BasicProperty('namespace', ['string']),
            new BasicProperty('owner_id', ['string', 'integer']),
            new BasicProperty('owner_resource', ['string']),
            new BasicProperty('value', ['integer', 'string']),
            new BasicProperty('value_type', ['string']),
        ]);
    }
}