<?php


namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;


/**
 * Class Customer
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property boolean           $accepts_marketing
 * @property boolean           $tax_exempt
 * @property boolean           $verified_email
 * @property string            $created_at
 * @property string            $email
 * @property string            $first_name
 * @property string            $last_name
 * @property string            $last_order_id
 * @property string            $last_order_name
 * @property string            $multipass_identifier
 * @property string            $note
 * @property string            $phone
 * @property string            $state
 * @property string            $total_spent
 * @property string            $updated_at
 * @property string            $id
 * @property integer           $orders_count
 * @property CustomerAddress[] $addresses
 * @property CustomerAddress   $default_address
 * @property Metafield         $metafield
 * @property array             $tags
 */
class Customer extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Customer', [
            new BasicProperty('id', ['string', 'integer']),
            new BasicProperty('accepts_marketing', ['boolean']),
            new BasicProperty('tax_exempt', ['boolean']),
            new BasicProperty('verified_email', ['boolean']),
            new BasicProperty('created_at', ['string']),
            new BasicProperty('email', ['string']),
            new BasicProperty('first_name', ['string']),
            new BasicProperty('last_name', ['string']),
            new BasicProperty('last_order_id', ['string', 'integer']),
            new BasicProperty('last_order_name', ['string']),
            new BasicProperty('multipass_identifier', ['string']),
            new BasicProperty('note', ['string']),
            new BasicProperty('phone', ['string']),
            new BasicProperty('state', ['string']),
            new BasicProperty('total_spent', ['string', 'double']),
            new BasicProperty('updated_at', ['string']),
            new BasicProperty('orders_count', ['integer']),
            new BasicArrayProperty('tags', ['string']),
            new NestedResourceProperty('metafield', [Metafield::class]),
            new NestedResourceProperty('default_address', [CustomerAddress::class]),
            new NestedResourceArrayProperty('addresses', [CustomerAddress::class]),
        ]);
    }
}