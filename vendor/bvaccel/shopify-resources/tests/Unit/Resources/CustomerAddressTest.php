<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\Product;
use Tests\TestCase;

/**
 * Class ProductResourceTest
 */
class CustomerAddressTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'            => 12345,
        'customer_id'   => 54321,
        'first_name'    => 'BV',
        'last_name'     => 'Accel',
        'company'       => 'BVAccel',
        'address1'      => '123 Test Street',
        'address2'      => 'Suite One',
        'city'          => 'Columbus',
        'province'      => 'Ohio',
        'country'       => 'United States',
        'zip'           => 43214,
        'phone'         => '1234567890',
        'province_code' => 'OH',
        'country_code'  => 'USA',
        'country_name'  => 'United States',
        'default'       => true,
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $address       = new CustomerAddress;
        $address->last_name = 'Change';

        // make sure data matches changed data
        $this->assertArrayHasKey('last_name', $address->changedProperties());
        $this->assertArrayNotHasKey('phone', $address->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $address = new CustomerAddress($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $address->id);
        $this->assertEquals($this->test_data['first_name'], $address->first_name);
        $this->assertEquals($this->test_data['last_name'], $address->last_name);
        $this->assertEquals($this->test_data['address1'], $address->address1);
        $this->assertEquals($this->test_data['province'], $address->province);
        $this->assertEquals($this->test_data['city'], $address->city);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $address = new CustomerAddress($this->test_data);
        $address->refresh();
        $this->assertEquals(0, sizeof($address->changedProperties()));
    }
}