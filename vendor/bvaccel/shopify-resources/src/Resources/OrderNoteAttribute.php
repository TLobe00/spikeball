<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class OrderNoteAttribute
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $name
 * @property string $value
 */
class OrderNoteAttribute extends ShopifyResource
{

    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('OrderNoteAttribute', [
            new BasicProperty('name', ['string']),
            new BasicProperty('value', ['string']),
        ]);
    }
}