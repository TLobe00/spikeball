<?php

namespace Tests\Unit\Resources;

use BVAccel\ShopifyResources\Resources\Customer;
use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\Metafield;
use Tests\TestCase;

/**
 * Class ProductResourceTest
 */
class MetafieldTest extends TestCase
{
    /**
     * Sample test data
     *
     * @var array
     */
    private $test_data = [
        'key'        => 'unit',
        'namespace'  => 'test',
        'value'      => 'test',
        'value_type' => 'string',
    ];

    /** @test */
    public function can_create_resource()
    {
        // create instance and update some data
        $metafield       = new Metafield;
        $metafield->namespace = 'change';

        // make sure data matches changed data
        $this->assertArrayHasKey('namespace', $metafield->changedProperties());
        $this->assertArrayNotHasKey('value', $metafield->changedProperties());
    }

    /** @test */
    public function can_set_values_with_constructor()
    {
        // init resource w/ constructor
        $metafield = new Metafield($this->test_data);

        // make sure data matches
        $this->assertEquals($this->test_data['key'], $metafield->key);
        $this->assertEquals($this->test_data['value'], $metafield->value);
        $this->assertEquals($this->test_data['value_type'], $metafield->value_type);
        $this->assertEquals($this->test_data['namespace'], $metafield->namespace);
    }

    /** @test */
    public function can_refresh_object_state()
    {
        // init resource w/ constructor
        $metafield = new Metafield($this->test_data);
        $metafield->refresh();
        $this->assertEquals(0, sizeof($metafield->changedProperties()));
    }
}