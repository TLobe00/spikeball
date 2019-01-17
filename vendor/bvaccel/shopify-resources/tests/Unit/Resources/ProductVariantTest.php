<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\ProductImage;
use BVAccel\ShopifyResources\Resources\ProductVariant;
use Tests\TestCase;

/**
 * Class ProductVariantTest
 */
class ProductVariantTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'                  => 12345,
        'product_id'          => 12345667,
        'created_at'          => '2018-01-01 00:00:00',
        'updated_at'          => '2018-01-01 00:00:00',
        'inventory_item_id'   => 98766874,
        'barcode'             => '01234567890',
        'fulfillment_service' => null,
        'weight_unit'         => 'oz',
        'option1'             => 'size',
        'option2'             => 'color',
        'option3'             => null,
        'title'               => 'Test Product',
        'price'               => 20.00,
        'compare_at_price'    => null,
        'taxable'             => true,
        'inventory_quantity'  => 50,
        'weight'              => 16,
        'grams'               => null,
        'position'            => 1,
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $variant        = new ProductVariant;
        $variant->title = 'Change';

        // make sure data matches changed data
        $this->assertArrayHasKey('title', $variant->changedProperties());
        $this->assertArrayNotHasKey('weight', $variant->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $variant = new ProductVariant($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $variant->id);
        $this->assertEquals($this->test_data['product_id'], $variant->product_id);
        $this->assertEquals($this->test_data['weight'], $variant->weight);
        $this->assertEquals($this->test_data['weight_unit'], $variant->weight_unit);
        $this->assertEquals($this->test_data['updated_at'], $variant->updated_at);
        $this->assertEquals($this->test_data['created_at'], $variant->created_at);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $variant = new ProductVariant($this->test_data);
        $variant->refresh();
        $this->assertEquals(0, sizeof($variant->changedProperties()));
    }
}