<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\ProductImage;
use Tests\TestCase;

/**
 * Class ProductImageTest
 */
class ProductImageTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'          => 12345,
        'product_id'  => 12345667,
        'position'    => 1,
        'width'       => 600,
        'height'      => 400,
        'src'         => 'http://example.com/test.jpb',
        'variant_ids' => [1234, 1235, 1236],
        'created_at'  => '2018-01-01 00:00:00',
        'updated_at'  => '2018-01-01 00:00:00',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $product      = new ProductImage;
        $product->src = 'http://example.com/change.jpg';

        // make sure data matches changed data
        $this->assertArrayHasKey('src', $product->changedProperties());
        $this->assertArrayNotHasKey('height', $product->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $product_image = new ProductImage($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $product_image->id);
        $this->assertEquals($this->test_data['src'], $product_image->src);
        $this->assertEquals($this->test_data['width'], $product_image->width);
        $this->assertEquals($this->test_data['height'], $product_image->height);
        $this->assertEquals($this->test_data['updated_at'], $product_image->updated_at);
        $this->assertEquals($this->test_data['created_at'], $product_image->created_at);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $product_image = new ProductImage($this->test_data);
        $product_image->refresh();
        $this->assertEquals(0, sizeof($product_image->changedProperties()));
    }
}