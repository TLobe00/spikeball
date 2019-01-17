<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\CustomerSearchParameters;
use BVAccel\ShopifyApiWrapper\Responses\MultipleCustomerResponse;

/**
 * Class CustomerRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class CustomerSearchRequest extends ShopifyRequest
{
    /**
     * @param CustomerSearchParameters|null $parameters
     * @return MultipleCustomerResponse
     */
    public function all(?CustomerSearchParameters $parameters = null)
    {
        return new MultipleCustomerResponse(
            $this->client->get('customers/search.json', $parameters->getParameters() ?? [])
        );
    }
}