<?php

namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\InventoryLevelResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\InventoryLevel;

/**
 * Class SingleInventoryLevelResponse
 *
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class SingleInventoryLevelResponse extends SingleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|InventoryLevel
     */
    public function inventoryLevel()
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
        return $this->body()->inventory_level ?? null;
    }
}