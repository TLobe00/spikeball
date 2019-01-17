<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\Redirect;
use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\InventoryItem;

/**
 * Class InventoryItemResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class RedirectResponseConverter extends ResponseConverter
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
        $redirect = new Redirect();
        $redirect->allowOverride();
        $redirect->id     = $json->id;
        $redirect->path   = $json->path;
        $redirect->target = $json->target;

        return $redirect;
    }
}