<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\SmartCollectionRule;

/**
 * Class SmartCollectionRuleResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class SmartCollectionRuleResponseConverter extends ResponseConverter
{

    /**
     * Parse Response into ShopifyResource
     *
     * @param $json
     * @return SmartCollectionRule|ShopifyResource
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $smart_collection_rule = new SmartCollectionRule;
        $smart_collection_rule->allowOverride();
        $smart_collection_rule->column    = $json->column ?? null;
        $smart_collection_rule->relation  = $json->relation ?? null;
        $smart_collection_rule->condition = $json->condition ?? null;

        return $smart_collection_rule;
    }
}