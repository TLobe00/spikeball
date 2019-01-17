<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class OrderAdjustment
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property integer $id
 * @property integer $order_id
 * @property integer $refund_id
 * @property string  $amount
 * @property string  $tax_amount
 * @property string  $kind
 * @property string  $reason
 */
class OrderAdjustment extends ShopifyResource
{

    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('OrderAdjustment', [
            new BasicProperty('id', ['integer', 'string']),
            new BasicProperty('order_id', ['integer', 'string']),
            new BasicProperty('refund_id', ['integer', 'string']),
            new BasicProperty('amount', ['integer', 'double', 'string']),
            new BasicProperty('tax_amount', ['integer', 'double', 'string']),
            new BasicProperty('kind', ['string']),
            new BasicProperty('reason', ['string']),
        ]);
    }
}