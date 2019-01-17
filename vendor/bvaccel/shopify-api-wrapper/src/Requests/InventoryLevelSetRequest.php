<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Responses\SingleInventoryLevelResponse;
use BVAccel\ShopifyResources\Resources\InventoryLevelSet;

/**
 * Class InventoryLevelSetRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class InventoryLevelSetRequest extends ShopifyRequest
{
    /**
     * Create
     *
     * @param InventoryLevelSet $inventory_level_set
     * @return SingleInventoryLevelResponse
     */
    public function create(InventoryLevelSet $inventory_level_set)
    {
        return new SingleInventoryLevelResponse($this->client->post('inventory_levels/set.json', $inventory_level_set->changedProperties()));
    }
}