<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class Location
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $country
 * @property string $country_code
 * @property string $created_at
 * @property string $updated_at
 * @property string $name
 * @property string $phone
 * @property string $province
 * @property string $province_code
 * @property string $zip
 * @property int    $id
 * @property bool   $legacy
 */
class Location extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Location', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('legacy', ['boolean']),
            new BasicProperty('address1', ['string']),
            new BasicProperty('address2', ['string']),
            new BasicProperty('city', ['string']),
            new BasicProperty('country', ['string']),
            new BasicProperty('country_code', ['string']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('name', ['string']),
            new BasicProperty('phone', ['string']),
            new BasicProperty('province', ['string']),
            new BasicProperty('province_code', ['string']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('zip', ['string', 'integer']),
        ]);
    }
}