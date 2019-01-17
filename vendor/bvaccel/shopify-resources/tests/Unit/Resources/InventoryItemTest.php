<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\InventoryItem;
use Tests\TestCase;

/**
 * Class ProductImageTest
 */
class InventoryItemTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'         => 12345,
        'tracked'    => true,
        'sku'        => 'TEST-12345',
        'created_at' => '2018-01-01 00:00:00',
        'updated_at' => '2018-01-01 00:00:00',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $inventory_item      = new InventoryItem;
        $inventory_item->sku = 'CHANGE-12344';

        // make sure data matches changed data
        $this->assertArrayHasKey('sku', $inventory_item->changedProperties());
        $this->assertArrayNotHasKey('tracked', $inventory_item->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $inventory_item = new InventoryItem($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $inventory_item->id);
        $this->assertEquals($this->test_data['tracked'], $inventory_item->tracked);
        $this->assertEquals($this->test_data['sku'], $inventory_item->sku);
        $this->assertEquals($this->test_data['updated_at'], $inventory_item->updated_at);
        $this->assertEquals($this->test_data['created_at'], $inventory_item->created_at);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $inventory_item = new InventoryItem($this->test_data);
        $inventory_item->refresh();
        $this->assertEquals(0, sizeof($inventory_item->changedProperties()));
    }
}