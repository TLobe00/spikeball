<?php


namespace BVAccel\ShopifyApiWrapper\Traits;


use BVAccel\ShopifyApiWrapper\Parameters\CustomerFindParameters;
use BVAccel\ShopifyApiWrapper\Parameters\CustomerParameters;
use BVAccel\ShopifyApiWrapper\Parameters\CustomerSearchParameters;
use BVAccel\ShopifyApiWrapper\Requests\CustomerAddressDefaultRequest;
use BVAccel\ShopifyApiWrapper\Requests\CustomerAddressRequest;
use BVAccel\ShopifyApiWrapper\Requests\CustomerCountRequest;
use BVAccel\ShopifyApiWrapper\Requests\CustomerRequest;
use BVAccel\ShopifyApiWrapper\Requests\CustomerSearchRequest;

/**
 * Trait CustomerResourceTrait
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait CustomerResourceTrait
{
    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\CustomerRequest
     */
    public function customer()
    {
        return new CustomerRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\CustomerSearchRequest
     */
    public function customerSearch()
    {
        return new CustomerSearchRequest($this->client);
    }

    /**
     * Customer Search Parameters
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\CustomerSearchParameters
     */
    public function customerSearchParams()
    {
        return new CustomerSearchParameters();
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\CustomerCountRequest
     */
    public function customerCount()
    {
        return new CustomerCountRequest($this->client);
    }

    /**
     * Customer Parameters
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\CustomerParameters
     */
    public function customerParams()
    {
        return new CustomerParameters();
    }

    /**
     * Customer Find Parameters
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\CustomerFindParameters
     */
    public function customerFindParams()
    {
        return new CustomerFindParameters();
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\CustomerAddressRequest
     */
    public function customerAddress()
    {
        return new CustomerAddressRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\CustomerAddressDefaultRequest
     */
    public function customerAddressDefault()
    {
        return new CustomerAddressDefaultRequest($this->client);
    }
}