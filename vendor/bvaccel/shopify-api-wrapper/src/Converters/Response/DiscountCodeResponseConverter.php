<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;

use BVAccel\ShopifyResources\Resources\DiscountCode;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class DiscountCodeResponseConverter
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class DiscountCodeResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource|DiscountCode
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $discount_code = new DiscountCode();
        $discount_code->allowOverride();
        $discount_code->id            = $data->id;
        $discount_code->code          = $data->code;
        $discount_code->created_at    = $data->created_at;
        $discount_code->price_rule_id = $data->price_rule_id;
        $discount_code->usage_count   = $data->usage_count;
        $discount_code->updated_at    = $data->updated_at;

        return $discount_code;
    }
}