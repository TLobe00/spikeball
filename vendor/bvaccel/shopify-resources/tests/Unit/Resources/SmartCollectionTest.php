<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\SmartCollection;
use BVAccel\ShopifyResources\Resources\SmartCollectionImage;
use BVAccel\ShopifyResources\Resources\SmartCollectionRule;
use Tests\TestCase;

/**
 * Class SmartCollectionTest
 */
class SmartCollectionTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'id'    => 12345,
        'title' => 'Smart A',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $smart_collection        = new SmartCollection();
        $smart_collection->title = 'Smart B';

        // make sure data matches changed data
        $this->assertArrayHasKey('title', $smart_collection->changedProperties());
        $this->assertArrayNotHasKey('published_at', $smart_collection->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $smart_collection = new SmartCollection($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['id'], $smart_collection->id);
        $this->assertEquals($this->test_data['title'], $smart_collection->title);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $smart_collection = new SmartCollection($this->test_data);
        $smart_collection->refresh();
        $this->assertEquals(0, sizeof($smart_collection->changedProperties()));
    }

    /** @test */
    public function can_get_changes_on_nested()
    {
        $smart_collection = new SmartCollection($this->test_data);

        $smart_collection->rules = [$rule = new SmartCollectionRule([])];
        $smart_collection->image = new SmartCollectionImage(['src' => 'test']);


        $this->assertArrayHasKey('image', $smart_collection->changedProperties());
//        $this->assertArrayNotHasKey('rules', $smart_collection->changedProperties());
    }

}