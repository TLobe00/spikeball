<?php

namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\InventoryLevelResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\InventoryLevel;

class MultipleInventoryLevelResponse extends MultipleResourceResponse
{
    /**
     * InventoryLevels
     *
     * @return InventoryLevel[]|ShopifyResource[]
     */
    public function inventoryLevels()
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
        return new InventoryLevelResponseConverter;
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->inventory_levels ?? [];
    }
}