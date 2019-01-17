<?php

namespace Tests\Unit\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\CustomerSearchParameters;

class CustomerSearchParametersTest extends \Tests\TestCase
{
    /** @test */
    public function can_build_search_parameters_object()
    {
        $parameters = new CustomerSearchParameters();
        $parameters->fields(['first_name', 'email', 'last_name'])
            ->query('Test Customer');

        $this->assertArrayHasKey('query', $parameters->getParameters());
        $this->assertArrayHasKey('fields', $parameters->getParameters());
        $this->assertEquals('Test Customer', $parameters->getParameters()['query']);
        $this->assertEquals('first_name,email,last_name', $parameters->getParameters()['fields']);

    }
}