<?php

namespace Tests\Unit\Requests;

use BVAccel\ShopifyApiWrapper\Clients\FakeClient;
use BVAccel\ShopifyApiWrapper\Requests\ProductRequest;
use BVAccel\ShopifyResources\Resources\Product;
use BVAccel\ShopifyApiWrapper\StoreConfig;

class ProductRequestTest extends \Tests\TestCase
{
    /** @test */
    public function can_make_create_request()
    {
        $client  = new FakeClient(new StoreConfig('', '', ''));
        $request = new ProductRequest($client);
        $product = new Product();
        $product->title = 'Test Product';
        $product->handle = 'test-product';

        $response = $request->create($product);

        $this->assertEquals(200, $response->statusCode());
        $this->assertInstanceOf(Product::class, $response->product());
        $this->assertEquals($product->title, $response->product()->title);
        $this->assertEquals($product->handle, $response->product()->handle);
    }
}