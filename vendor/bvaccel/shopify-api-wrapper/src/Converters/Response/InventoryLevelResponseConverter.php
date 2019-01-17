<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\InventoryItem;
use BVAccel\ShopifyResources\Resources\InventoryLevel;

/**
 * Class InventoryLevelResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class InventoryLevelResponseConverter extends ResponseConverter
{
    /**
     * ProductJsonParser constructor.
     */
    public function __construct()
    {
    }

    /**
     * Parse Response into ShopifyResource
     *
     * @param $json
     * @return InventoryItem|ShopifyResource
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $inventory_level = new InventoryLevel;
        $inventory_level->allowOverride();
        $inventory_level->inventory_item_id = $json->inventory_item_id;
        $inventory_level->location_id       = $json->location_id;
        $inventory_level->available         = $json->available;
        $inventory_level->updated_at        = $json->updated_at;

        return $inventory_level;
    }
}