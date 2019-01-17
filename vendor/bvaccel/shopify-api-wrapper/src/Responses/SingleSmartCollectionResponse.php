<?php

namespace BVAccel\ShopifyApiWrapper\Responses;

use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\SmartCollectionResponseConverter;
use BVAccel\ShopifyResources\Resources\Redirect;

/**
 * Class SingleRedirectResponse
 *
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class SingleSmartCollectionResponse extends SingleResourceResponse
{
    /**
     * Inventory Item
     *
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|Redirect
     */
    public function smartCollection()
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
        return new SmartCollectionResponseConverter;
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->smart_collection ?? null;
    }
}