<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;

use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\SmartCollection;

/**
 * Class SmartCollectionResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class SmartCollectionResponseConverter extends ResponseConverter
{
    /**
     * @var SmartCollectionImageResponseConverter
     */
    private $image_response_converter;

    /**
     * @var SmartCollectionRuleResponseConverter
     */
    private $rule_response_converter;

    /**
     * ProductJsonParser constructor.
     */
    public function __construct()
    {
        $this->image_response_converter = new SmartCollectionImageResponseConverter;
        $this->rule_response_converter  = new SmartCollectionRuleResponseConverter;
    }

    /**
     * Parse Response into ShopifyResource
     *
     * @param $json
     * @return SmartCollection|ShopifyResource
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $smart_collection = new SmartCollection;
        $smart_collection->allowOverride();
        $smart_collection->id              = $json->id ?? null;
        $smart_collection->handle          = $json->handle ?? null;
        $smart_collection->title           = $json->title ?? null;
        $smart_collection->updated_at      = $json->updated_at ?? null;
        $smart_collection->body_html       = $json->body_html ?? null;
        $smart_collection->published_at    = $json->published_at ?? null;
        $smart_collection->sort_order      = $json->sort_order ?? null;
        $smart_collection->template_suffix = $json->template_suffix ?? null;
        $smart_collection->disjunctive     = $json->disjunctive ?? null;
        $smart_collection->rules           = $this->parseChildCollection($this->rule_response_converter, $json->rules);
        $smart_collection->published_scope = $json->published_scope ?? null;
        $smart_collection->image           = ($json->image ?? false) ? $this->image_response_converter->process($json->image) : null;

        return $smart_collection;
    }
}