<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\InventoryItemParameters;
use BVAccel\ShopifyApiWrapper\Responses\MultipleInventoryItemResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleInventoryItemResponse;
use BVAccel\ShopifyResources\Resources\InventoryItem;

/**
 * Class InventoryItemRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class InventoryItemRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param InventoryItemParameters $parameters
     * @return MultipleInventoryItemResponse
     */
    public function all(InventoryItemParameters $parameters)
    {
        return new MultipleInventoryItemResponse($this->client->get('inventory_items.json', $parameters->getParameters()));
    }

    /**
     * Find
     *
     * @param $inventory_item_id
     * @return SingleInventoryItemResponse
     */
    public function find($inventory_item_id)
    {
        return new SingleInventoryItemResponse($this->client->get("inventory_items/$inventory_item_id.json"));
    }

    /**
     * Update
     *
     * @param               $inventory_item_id
     * @param InventoryItem $inventory_item
     * @return SingleInventoryItemResponse
     */
    public function update($inventory_item_id, InventoryItem $inventory_item)
    {
        return new SingleInventoryItemResponse($this->client->put("inventory_items/$inventory_item_id.json", [
            'inventory_item' => $inventory_item->changedProperties(),
        ]));
    }
}