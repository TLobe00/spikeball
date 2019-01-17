<?php


namespace BVAccel\ShopifyApiWrapper\Traits;


//use BVAccel\ShopifyApiWrapper\Parameters\CustomerFindParameters;
use BVAccel\ShopifyApiWrapper\Parameters\BlogParameters;
//use BVAccel\ShopifyApiWrapper\Parameters\CustomerSearchParameters;
//use BVAccel\ShopifyApiWrapper\Requests\CustomerAddressDefaultRequest;
//use BVAccel\ShopifyApiWrapper\Requests\CustomerAddressRequest;
//use BVAccel\ShopifyApiWrapper\Requests\CustomerCountRequest;
use BVAccel\ShopifyApiWrapper\Requests\BlogRequest;
//use BVAccel\ShopifyApiWrapper\Requests\CustomerSearchRequest;

/**
 * Trait BlogResourceTrait
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait BlogResourceTrait
{
    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\BlogRequest
     */
    public function blog()
    {
        return new BlogRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\CustomerSearchRequest
     */
//    public function customerSearch()
//    {
//        return new CustomerSearchRequest($this->client);
//    }

    /**
     * Customer Search Parameters
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\CustomerSearchParameters
     */
//    public function customerSearchParams()
//    {
//        return new CustomerSearchParameters();
//    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\CustomerCountRequest
     */
//    public function customerCount()
//    {
//        return new CustomerCountRequest($this->client);
//    }

    /**
     * Blog Parameters
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\BlogParameters
     */
    public function blogParams()
    {
        return new BlogParameters();
    }

    /**
     * Customer Find Parameters
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\CustomerFindParameters
     */
//    public function customerFindParams()
//    {
//        return new CustomerFindParameters();
//    }

}
