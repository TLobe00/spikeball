<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class TaxLine
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $title
 * @property string $price
 * @property double $rate
 */
class TaxLine extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('TaxLine', [
            new BasicProperty('title', ['string']),
            new BasicProperty('price', ['string', 'double', 'integer']),
            new BasicProperty('rate', ['string', 'double', 'integer']),
        ]);
    }
}