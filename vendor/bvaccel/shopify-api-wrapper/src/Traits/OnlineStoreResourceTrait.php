<?php


namespace BVAccel\ShopifyApiWrapper\Traits;

use BVAccel\ShopifyApiWrapper\Requests\RedirectRequest;

/**
 * Trait CustomerResourceTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait OnlineStoreResourceTrait
{
    /**
     * Redirect
     *
     * Access to the redirect resource
     *
     * @return \BVAccel\ShopifyApiWrapper\Requests\RedirectRequest
     */
    public function redirect()
    {
        return new RedirectRequest($this->client);
    }
}