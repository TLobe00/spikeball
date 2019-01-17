<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyResources\Resources\Redirect;
use BVAccel\ShopifyApiWrapper\Responses\SingleRedirectResponse;

/**
 * Class RedirectRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class RedirectRequest extends ShopifyRequest
{
    /**
     * All
     */
    public function all()
    {

    }

    /**
     * Create
     *
     * @param Redirect $redirect
     * @return SingleRedirectResponse
     */
    public function create(Redirect $redirect)
    {
        return new SingleRedirectResponse($this->client->post("redirects.json", [
            'redirect' => $redirect->changedProperties(),
        ]));
    }

    /**
     * Find
     *
     * @param int $redirect_id
     * @return SingleRedirectResponse
     */
    public function find(int $redirect_id)
    {
        return new SingleRedirectResponse($this->client->get("redirects/$redirect_id.json"));
    }

    /**
     * Update
     *
     * @param int      $redirect_id
     * @param Redirect $redirect
     * @return SingleRedirectResponse
     */
    public function update(int $redirect_id, Redirect $redirect)
    {
        return new SingleRedirectResponse($this->client->put("redirects/$redirect_id.json", [
            'redirect' => $redirect->changedProperties(),
        ]));
    }
}