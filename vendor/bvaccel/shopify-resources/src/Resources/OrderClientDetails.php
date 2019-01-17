<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class OrderClientDetails
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string  $accept_language
 * @property string  $browser_ip
 * @property string  $session_hash
 * @property string  $user_agent
 * @property integer $browser_width
 * @property integer $browser_height
 */
class OrderClientDetails extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('OrderClientDetails', [
            new BasicProperty('accept_language', ['string']),
            new BasicProperty('browser_height', ['integer']),
            new BasicProperty('browser_width', ['integer']),
            new BasicProperty('browser_ip', ['string']),
            new BasicProperty('session_hash', ['string']),
            new BasicProperty('user_agent', ['string']),
        ]);
    }
}