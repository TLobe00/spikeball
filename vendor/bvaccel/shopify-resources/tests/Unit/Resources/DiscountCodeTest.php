<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\Customer;
use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\DiscountCode;
use BVAccel\ShopifyResources\Resources\Metafield;
use Tests\TestCase;

/**
 * Class ProductResourceTest
 */
class DiscountCodeTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'            => 12345,
        'price_rule_id' => 54321,
        'usage_count'   => 100,
        'code'          => 'CODE15',
        'created_at'    => '2018-01-01 00:00:00',
        'updated_at'    => '2018-01-01 00:00:00',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $discount_code       = new DiscountCode;
        $discount_code->code = 'CHANGE';

        // make sure data matches changed data
        $this->assertArrayHasKey('code', $discount_code->changedProperties());
        $this->assertArrayNotHasKey('usage_count', $discount_code->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $discount_code = new DiscountCode($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $discount_code->id);
        $this->assertEquals($this->test_data['price_rule_id'], $discount_code->price_rule_id);
        $this->assertEquals($this->test_data['usage_count'], $discount_code->usage_count);
        $this->assertEquals($this->test_data['code'], $discount_code->code);
        $this->assertEquals($this->test_data['created_at'], $discount_code->created_at);
        $this->assertEquals($this->test_data['updated_at'], $discount_code->updated_at);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $discount_code = new DiscountCode($this->test_data);
        $discount_code->refresh();
        $this->assertEquals(0, sizeof($discount_code->changedProperties()));
    }
}