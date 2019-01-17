<?php

namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\InventoryItemResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\InventoryItem;

/**
 * Class SingleInventoryItemResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class SingleInventoryItemResponse extends SingleResourceResponse
{
    /**
     * Inventory Item
     *
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|InventoryItem
     */
    public function inventoryItem()
    {
        return $this->data;
    }

    /**
     * Response Data Parser
     *
     * @return ResponseConverter
     */
    protected function _getConverter(): ResponseConverter
    {
        return new InventoryItemResponseConverter;
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->inventory_item ?? null;
    }
}