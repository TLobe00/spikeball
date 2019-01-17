<?php

namespace BVAccel\ShopifyApiWrapper\Responses;

use BVAccel\ShopifyApiWrapper\Converters\Response\RedirectResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\Redirect;

/**
 * Class SingleRedirectResponse
 *
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class SingleRedirectResponse extends SingleResourceResponse
{
    /**
     * Inventory Item
     *
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource|Redirect
     */
    public function redirect()
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
        return new RedirectResponseConverter;
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->redirect ?? null;
    }
}