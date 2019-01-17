<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class OrderTransaction
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property string $amount
 * @property string $authorization
 * @property string $created_at
 * @property string $currency
 * @property string $device_id
 * @property string $error_code
 * @property string $gateway
 * @property string $id
 * @property string $kind
 * @property string $message
 * @property string $order_id
 * @property array  $payment_details
 * @property string $parent_id
 * @property array  $receipt
 * @property string $source_name
 * @property string $status
 * @property bool   $test
 * @property string $user_id
 */
class OrderTransaction extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('OrderTransaction', [
            new BasicProperty('amount', ['string', 'integer']),
            new BasicProperty('authorization', ['string']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('currency', ['string']),
            new BasicProperty('device_id', ['string', 'integer']),
            new BasicProperty('error_code', ['string']),
            new BasicProperty('gateway', ['string']),
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('kind', ['string']),
            new BasicProperty('message', ['string']),
            new BasicProperty('order_id', ['string', 'integer']),
            new BasicProperty('payment_details', ['array']),
            new BasicProperty('parent_id', ['string', 'integer']),
            new BasicProperty('receipt', ['array']),
            new BasicProperty('source_name', ['string']),
            new BasicProperty('status', ['string']),
            new BasicProperty('test', ['bool']),
            new BasicProperty('user_id', ['string', 'integer']),
        ]);
    }
}