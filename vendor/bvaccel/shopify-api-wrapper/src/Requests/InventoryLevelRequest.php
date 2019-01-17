<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\InventoryLevelParameters;
use BVAccel\ShopifyApiWrapper\Responses\MultipleInventoryLevelResponse;

/**
 * Class InventoryLevelRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class InventoryLevelRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param InventoryLevelParameters $parameters
     * @return MultipleInventoryLevelResponse
     */
    public function all(InventoryLevelParameters $parameters)
    {
        return new MultipleInventoryLevelResponse($this->client->get("inventory_levels.json", $parameters->getParameters()));
    }
}