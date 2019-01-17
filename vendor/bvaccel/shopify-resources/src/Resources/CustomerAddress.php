<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class CustomerAddress
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string  $id
 * @property string  $customer_id
 * @property string  $first_name
 * @property string  $last_name
 * @property string  $company
 * @property string  $address1
 * @property string  $address2
 * @property string  $city
 * @property string  $province
 * @property string  $country
 * @property string  $zip
 * @property string  $phone
 * @property string  $province_code
 * @property string  $country_code
 * @property string  $country_name
 * @property boolean $default
 */
class CustomerAddress extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('CustomerAddress', [
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('customer_id', ['string', 'integer']),
            new BasicProperty('first_name', ['string']),
            new BasicProperty('last_name', ['string']),
            new BasicProperty('company', ['string']),
            new BasicProperty('address1', ['string']),
            new BasicProperty('address2', ['string']),
            new BasicProperty('city', ['string']),
            new BasicProperty('province', ['string']),
            new BasicProperty('country', ['string']),
            new BasicProperty('zip', ['string', 'integer']),
            new BasicProperty('phone', ['string', 'integer']),
            new BasicProperty('province_code', ['string']),
            new BasicProperty('country_code', ['string']),
            new BasicProperty('country_name', ['string']),
            new BasicProperty('default', ['boolean']),
        ]);
    }
}