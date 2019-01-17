<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\CustomerFindParameters;
use BVAccel\ShopifyApiWrapper\Parameters\CustomerParameters;
use BVAccel\ShopifyApiWrapper\Responses\MultipleCustomerResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleCustomerResponse;
use BVAccel\ShopifyResources\Resources\Customer;

/**
 * Class CustomerRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class CustomerRequest extends ShopifyRequest
{
    /**
     * @param CustomerParameters $parameters
     * @return MultipleCustomerResponse
     */
    public function all(?CustomerParameters $parameters = null)
    {
        return new MultipleCustomerResponse(
            $this->client->get('customers.json', $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param Customer $customer
     * @return SingleCustomerResponse
     */
    public function create(Customer $customer)
    {
        return new SingleCustomerResponse(
            $this->client->post("customers.json", ['customer' => $customer->changedProperties()])
        );
    }

    /**
     * @param                             $customer_id
     * @param CustomerFindParameters|null $parameters
     * @return SingleCustomerResponse
     */
    public function find($customer_id, ?CustomerFindParameters $parameters = null)
    {
        return new SingleCustomerResponse(
            $this->client->get("customers/$customer_id.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param          $customer_id
     * @param Customer $customer
     * @return SingleCustomerResponse
     */
    public function update($customer_id, Customer $customer)
    {
        return new SingleCustomerResponse(
            $this->client->put("customers/$customer_id.json", ['customer' => $customer->changedProperties()])
        );
    }
}