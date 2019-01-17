<?php

namespace BVAccel\ShopifyApiWrapper\Responses;

use BVAccel\ShopifyApiWrapper\Converters\Response\InventoryItemResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\InventoryItem;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class MultipleInventoryItemResponse
 *
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class MultipleInventoryItemResponse extends MultipleResourceResponse
{
    /**
     * InventoryItems
     *
     * @return InventoryItem[]|ShopifyResource[]
     */
    public function inventoryItems()
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
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->inventory_items ?? [];
    }
}