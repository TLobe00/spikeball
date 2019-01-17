<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\Metafield;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class MetafieldResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class MetafieldResponseConverter extends ResponseConverter
{
    /**
     * @param \stdClass $json
     * @return ShopifyResource|Metafield
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $metafield = new Metafield();
        $metafield->allowOverride();
        $metafield->id             = $json->id ?? null;
        $metafield->key            = $json->key ?? null;
        $metafield->namespace      = $json->namespace ?? null;
        $metafield->value          = $json->value ?? null;
        $metafield->value_type     = $json->value_type ?? null;
        $metafield->owner_id       = $json->owner_id ?? null;
        $metafield->owner_resource = $json->owner_resource ?? null;

        return $metafield;
    }
}