<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class CustomerAddressResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class CustomerAddressResponseConverter extends ResponseConverter
{
    /**
     * @param \stdClass $json
     * @return CustomerAddress|ShopifyResource
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $address = new CustomerAddress();
        $address->allowOverride();
        $address->id            = $json->id ?? null;
        $address->customer_id   = $json->customer_id ?? null;
        $address->first_name    = $json->first_name ?? null;
        $address->last_name     = $json->last_name ?? null;
        $address->company       = $json->company ?? null;
        $address->address1      = $json->address1 ?? null;
        $address->address2      = $json->address2 ?? null;
        $address->city          = $json->city ?? null;
        $address->province      = $json->province ?? null;
        $address->country       = $json->country ?? null;
        $address->zip           = $json->zip ?? null;
        $address->phone         = $json->phone ?? null;
        $address->province_code = $json->province_code ?? null;
        $address->country_code  = $json->country_code ?? null;
        $address->country_name  = $json->country_name ?? null;
        $address->default       = $json->default ?? null;

        return $address;
    }
}