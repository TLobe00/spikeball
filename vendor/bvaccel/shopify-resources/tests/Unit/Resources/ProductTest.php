<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\Product;
use BVAccel\ShopifyResources\Resources\ProductVariant;
use Tests\TestCase;

/**
 * Class ProductResourceTest
 */
class ProductTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'body_html'    => '<p>test</p>',
        'created_at'   => '2018-01-01 00:00:00',
        'updated_at'   => '2018-01-01 00:00:00',
        'handle'       => 'test-handle',
        'product_type' => 'Test Type',
    ];

    /** @test */
    public function can_create_resource()
    {


        // create instance and update some data
        $product           = new Product;
        $product->title    = "TEST";
        $product->tags     = ['test', 'test'];
        $product->variants = [new ProductVariant()];
        $variant           = $product->variants[0];

        $variant->title = 'Test title';

        // make sure data matches changed data
        $this->assertArrayHasKey('tags', $product->changedProperties());
        $this->assertArrayNotHasKey('body_html', $product->changedProperties());
        $this->assertArrayNotHasKey('images', $product->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $product = new Product($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['body_html'], $product->body_html);
        $this->assertEquals($this->test_data['created_at'], $product->created_at);
        $this->assertEquals($this->test_data['updated_at'], $product->updated_at);
        $this->assertEquals($this->test_data['handle'], $product->handle);
        $this->assertEquals($this->test_data['product_type'], $product->product_type);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $product = new Product($this->test_data);
        $product->refresh();
        $this->assertEquals(0, sizeof($product->changedProperties()));
    }

    /** @test */
    public function cannot_set_readonly_values_outside_of_override_mode()
    {
        $product = new Product();

        try {
            $product->id = 123;
        } catch (\Exception $e) {
            $exception = $e;
        }

        $this->assertNotNull($exception ?? null);
        $this->assertEquals(null, $product->id);
    }
}