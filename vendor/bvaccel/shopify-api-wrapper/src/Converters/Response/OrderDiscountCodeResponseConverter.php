<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;

use BVAccel\ShopifyResources\Resources\OrderDiscountCode;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

class OrderDiscountCodeResponseConverter extends ResponseConverter
{

    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $discount_code = new OrderDiscountCode;
        $discount_code->allowOverride();
        $discount_code->code   = $data->code ?? null;
        $discount_code->amount = $data->amount ?? null;
        $discount_code->type   = $data->type ?? null;

        return $discount_code;
    }
}