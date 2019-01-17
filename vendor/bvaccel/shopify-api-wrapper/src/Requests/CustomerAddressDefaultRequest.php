<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Responses\SingleCustomerAddressDefaultResponse;

class CustomerAddressDefaultRequest extends ShopifyRequest
{
    /**
     * @param $customer_id
     * @param $address_id
     * @return SingleCustomerAddressDefaultResponse
     */
    public function create($customer_id, $address_id)
    {
        return new SingleCustomerAddressDefaultResponse(
            $this->client->put("customers/$customer_id/addresses/$address_id/default.json", [])
        );
    }
}