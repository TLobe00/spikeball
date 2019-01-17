<?php


namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Responses\MultipleCustomerAddressResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleCustomerAddressResponse;
use BVAccel\ShopifyResources\Resources\CustomerAddress;

class CustomerAddressRequest extends ShopifyRequest
{
    /**
     * @param $customer_id
     * @return MultipleCustomerAddressResponse
     */
    public function all($customer_id)
    {
        return new MultipleCustomerAddressResponse($this->client->get("customers/$customer_id/addresses.json"));
    }

    /**
     * @param                 $customer_id
     * @param CustomerAddress $address
     * @return SingleCustomerAddressResponse
     */
    public function create($customer_id, CustomerAddress $address)
    {
        return new SingleCustomerAddressResponse(
            $this->client->post("customers/$customer_id/addresses.json", ['address' => $address->changedProperties()])
        );
    }

    /**
     * @param $customer_id
     * @param $address_id
     * @return SingleCustomerAddressResponse
     */
    public function find($customer_id, $address_id)
    {
        return new SingleCustomerAddressResponse($this->client->get("customers/$customer_id/addresses/$address_id.json"));
    }

    /**
     * @param                 $customer_id
     * @param                 $address_id
     * @param CustomerAddress $address
     * @return SingleCustomerAddressResponse
     */
    public function update($customer_id, $address_id, CustomerAddress $address)
    {
        return new SingleCustomerAddressResponse(
            $this->client->put("customers/$customer_id/addresses/$address_id.json", ['address' => $address->changedProperties()])
        );
    }
}