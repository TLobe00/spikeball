<?php

namespace BVAccel\ShopifyApiWrapper\Traits;

use BVAccel\ShopifyApiWrapper\Coordinators\Coordinator;
use BVAccel\ShopifyApiWrapper\Parameters\InventoryItemParameters;
use BVAccel\ShopifyApiWrapper\Parameters\InventoryLevelParameters;
use BVAccel\ShopifyApiWrapper\Requests\InventoryItemRequest;
use BVAccel\ShopifyApiWrapper\Requests\InventoryLevelRequest;
use BVAccel\ShopifyApiWrapper\Requests\InventoryLevelSetRequest;

/**
 * Trait InventoryResourceTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 * @mixin Coordinator
 */
trait InventoryResourceTrait
{
    /**
     * Inventory Item Request
     *
     * @return \BVAccel\ShopifyApiWrapper\Requests\InventoryItemRequest
     */
    public function inventoryItem()
    {
        return new InventoryItemRequest($this->client);
    }

    /**
     * Inventory Level
     *
     * @return \BVAccel\ShopifyApiWrapper\Requests\InventoryLevelRequest
     */
    public function inventoryLevel()
    {
        return new InventoryLevelRequest($this->client);
    }

    /**
     * InventoryLevelSet
     *
     * @return \BVAccel\ShopifyApiWrapper\Requests\InventoryLevelSetRequest
     */
    public function inventoryLevelSet()
    {
        return new InventoryLevelSetRequest($this->client);
    }

    /**
     * Inventory Level Params
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\InventoryLevelParameters
     */
    public function inventoryLevelParams()
    {
        return new InventoryLevelParameters();
    }

    /**
     * Location
     */
    public function location()
    {

    }

    /**
     * Inventory Item Params
     *
     * @return \BVAccel\ShopifyApiWrapper\Parameters\InventoryItemParameters
     */
    public function inventoryItemParams()
    {
        return new InventoryItemParameters();
    }
}