<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\OrderDiscountApplication;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

class OrderDiscountApplicationResponseConverter extends ResponseConverter
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
        $discount_application = new OrderDiscountApplication;
        $discount_application->allowOverride();
        $discount_application->code             = $data->code ?? null;
        $discount_application->description      = $data->description ?? null;
        $discount_application->target_selection = $data->target_selection ?? null;
        $discount_application->target_type      = $data->target_type ?? null;
        $discount_application->title            = $data->title ?? null;
        $discount_application->type             = $data->type ?? null;
        $discount_application->value            = $data->value ?? null;
        $discount_application->value_type       = $data->value_type ?? null;

        return $discount_application;
    }
}