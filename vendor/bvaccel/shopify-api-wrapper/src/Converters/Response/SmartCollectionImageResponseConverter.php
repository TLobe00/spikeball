<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\SmartCollectionImage;

/**
 * Class SmartCollectionRuleResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class SmartCollectionImageResponseConverter extends ResponseConverter
{

    /**
     * Parse Response into ShopifyResource
     *
     * @param $json
     * @return SmartCollectionImage|ShopifyResource
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $smart_collection_rule = new SmartCollectionImage();
        $smart_collection_rule->allowOverride();
        $smart_collection_rule->created_at = $json->column;
        $smart_collection_rule->alt        = $json->relation;
        $smart_collection_rule->width      = $json->condition;
        $smart_collection_rule->height     = $json->condition;
        $smart_collection_rule->src        = $json->condition;

        return $smart_collection_rule;
    }
}