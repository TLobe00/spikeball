<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\Customer;
use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\Metafield;
use Tests\TestCase;

/**
 * Class ProductResourceTest
 */
class CustomerTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'                   => 12345,
        'accepts_marketing'    => false,
        'tax_exempt'           => false,
        'verified_email'       => true,
        'created_at'           => '2018-01-01 00:00:00',
        'updated_at'           => '2018-01-01 00:00:00',
        'email'                => 'test@example.com',
        'first_name'           => 'First',
        'last_name'            => 'Last',
        'last_order_id'        => 123,
        'last_order_name'      => 'Test Order',
        'multipass_identifier' => 'abc',
        'note'                 => 'Test note.',
        'phone'                => '1234567890',
        'state'                => 'OH',
        'total_spent'          => 500.00,
        'orders_count'         => 3,
        'tags'                 => ['one tag', 'two tag', 'red tag', 'blue tag',],
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $customer       = new Customer;
        $customer->tags = ['test', 'test'];

        // make sure data matches changed data
        $this->assertArrayHasKey('tags', $customer->changedProperties());
        $this->assertArrayNotHasKey('first_name', $customer->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        $address   = new CustomerAddress;
        $metafield = new Metafield;

        // init resource w/ constructor
        $customer = new Customer($this->test_data + ['addresses' => [$address], 'default_address' => $address, 'metafield' => $metafield]);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $customer->id);
        $this->assertEquals($this->test_data['first_name'], $customer->first_name);
        $this->assertEquals($this->test_data['last_name'], $customer->last_name);
        $this->assertEquals($this->test_data['email'], $customer->email);
        $this->assertEquals($this->test_data['created_at'], $customer->created_at);
        $this->assertEquals($this->test_data['updated_at'], $customer->updated_at);
        $this->assertEquals($address, $customer->addresses[0]);
        $this->assertEquals($address, $customer->default_address);
        $this->assertEquals($metafield, $customer->metafield);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $customer = new Customer($this->test_data);
        $customer->refresh();
        $this->assertEquals(0, sizeof($customer->changedProperties()));
    }
}