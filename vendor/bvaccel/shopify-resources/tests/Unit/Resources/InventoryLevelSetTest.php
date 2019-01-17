<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\InventoryItem;
use BVAccel\ShopifyResources\Resources\InventoryLevel;
use BVAccel\ShopifyResources\Resources\InventoryLevelSet;
use Tests\TestCase;

/**
 * Class InventoryLevelSetTest
 */
class InventoryLevelSetTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'location_id'       => 98766,
        'inventory_item_id' => 12345,
        'available'         => 50,
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $inventory_level_set            = new InventoryLevelSet;
        $inventory_level_set->available = 70;

        // make sure data matches changed data
        $this->assertArrayHasKey('available', $inventory_level_set->changedProperties());
        $this->assertArrayNotHasKey('location_id', $inventory_level_set->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $inventory_level_set = new InventoryLevelSet($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['location_id'], $inventory_level_set->location_id);
        $this->assertEquals($this->test_data['inventory_item_id'], $inventory_level_set->inventory_item_id);
        $this->assertEquals($this->test_data['available'], $inventory_level_set->available);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $inventory_level_set = new InventoryLevelSet($this->test_data);
        $inventory_level_set->refresh();
        $this->assertEquals(0, sizeof($inventory_level_set->changedProperties()));
    }
}