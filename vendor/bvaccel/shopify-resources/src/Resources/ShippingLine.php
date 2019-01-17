<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class ShippingLine
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string    $code
 * @property string    $price
 * @property string    $source
 * @property string    $title
 * @property string    $carrier_identifier
 * @property string    $requested_fulfillment_service_id
 * @property TaxLine[] $tax_lines
 */
class ShippingLine extends ShopifyResource
{

    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('ShippingLine', [
            new BasicProperty('code', ['string']),
            new BasicProperty('price', ['string', 'double', 'integer']),
            new BasicProperty('source', ['string']),
            new BasicProperty('title', ['string']),
            new BasicProperty('carrier_identifier', ['string']),
            new BasicProperty('requested_fulfillment_service_id', ['string']),
            new NestedResourceArrayProperty('tax_lines', [TaxLine::class]),
        ]);
    }
}