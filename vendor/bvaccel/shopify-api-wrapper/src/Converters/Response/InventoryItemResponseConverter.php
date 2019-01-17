<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\InventoryItem;

/**
 * Class InventoryItemResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class InventoryItemResponseConverter extends ResponseConverter
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
        $inventory_item = new InventoryItem;
        $inventory_item->allowOverride();
        $inventory_item->id         = $json->id;
        $inventory_item->sku        = $json->sku;
        $inventory_item->created_at = $json->created_at;
        $inventory_item->updated_at = $json->updated_at;
        $inventory_item->tracked    = $json->tracked;

        return $inventory_item;
    }
}