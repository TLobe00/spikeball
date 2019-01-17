<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\PriceRule;
use BVAccel\ShopifyResources\Resources\Product;
use Tests\TestCase;

/**
 * Class PriceRuleTest
 */
class PriceRuleTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'value'                                      => 30,
        'usage_limit'                                => 1,
        'once_per_customer'                          => true,
        'allocation_method'                          => 'test',
        'created_at'                                 => '2018-01-01 00:00:00',
        'ends_at'                                    => '2019-01-01 00:00:00',
        'id'                                         => 12345,
        'starts_at'                                  => '2018-01-01 00:00:00',
        'title'                                      => 'CODE15',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $price_rule        = new PriceRule();
        $price_rule->title = 'CHANGE';

        // make sure data matches changed data
        $this->assertArrayHasKey('title', $price_rule->changedProperties());
        $this->assertArrayNotHasKey('starts_at', $price_rule->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $price_rule = new PriceRule($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $price_rule->id);
        $this->assertEquals($this->test_data['value'], $price_rule->value);
        $this->assertEquals($this->test_data['usage_limit'], $price_rule->usage_limit);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $price_rule = new PriceRule($this->test_data);
        $price_rule->refresh();
        $this->assertEquals(0, sizeof($price_rule->changedProperties()));
    }
}