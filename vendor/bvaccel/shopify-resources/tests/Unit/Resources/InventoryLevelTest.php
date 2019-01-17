<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\InventoryItem;
use BVAccel\ShopifyResources\Resources\InventoryLevel;
use Tests\TestCase;

/**
 * Class InventoryLevelTest
 */
class InventoryLevelTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'                => 12345,
        'location_id'       => 98766,
        'inventory_item_id' => 12345,
        'available'         => 50,
        'updated_at'        => '2018-01-01 00:00:00',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $inventory_level            = new InventoryLevel;
        $inventory_level->available = 70;

        // make sure data matches changed data
        $this->assertArrayHasKey('available', $inventory_level->changedProperties());
        $this->assertArrayNotHasKey('location_id', $inventory_level->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $inventory_level = new InventoryLevel($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $inventory_level->id);
        $this->assertEquals($this->test_data['location_id'], $inventory_level->location_id);
        $this->assertEquals($this->test_data['inventory_item_id'], $inventory_level->inventory_item_id);
        $this->assertEquals($this->test_data['updated_at'], $inventory_level->updated_at);
        $this->assertEquals($this->test_data['available'], $inventory_level->available);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $inventory_level = new InventoryLevel($this->test_data);
        $inventory_level->refresh();
        $this->assertEquals(0, sizeof($inventory_level->changedProperties()));
    }
}