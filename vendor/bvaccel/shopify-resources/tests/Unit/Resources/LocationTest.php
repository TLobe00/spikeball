<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\Location;
use BVAccel\ShopifyResources\Resources\Product;
use Tests\TestCase;

/**
 * Class LocationTest
 */
class LocationTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'            => 12345,
        'address1'      => '123 Test Street',
        'address2'      => 'Suite One',
        'city'          => 'Columbus',
        'province'      => 'Ohio',
        'country'       => 'United States',
        'zip'           => 43214,
        'phone'         => '1234567890',
        'province_code' => 'OH',
        'country_code'  => 'USA',
        'legacy'        => true,
        'created_at'    => '2018-01-01 00:00:00',
        'updated_at'    => '2018-01-01 00:00:00',
        'name'          => 'Primary',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $location       = new Location;
        $location->name = 'Change';

        // make sure data matches changed data
        $this->assertArrayHasKey('name', $location->changedProperties());
        $this->assertArrayNotHasKey('phone', $location->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $location = new Location($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $location->id);
        $this->assertEquals($this->test_data['phone'], $location->phone);
        $this->assertEquals($this->test_data['province'], $location->province);
        $this->assertEquals($this->test_data['address1'], $location->address1);
        $this->assertEquals($this->test_data['city'], $location->city);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $location = new Location($this->test_data);
        $location->refresh();
        $this->assertEquals(0, sizeof($location->changedProperties()));
    }
}