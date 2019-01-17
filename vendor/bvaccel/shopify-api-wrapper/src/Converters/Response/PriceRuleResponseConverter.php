<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\PriceRule;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

class PriceRuleResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource|PriceRule
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $price_rule = new PriceRule();
        $price_rule->allowOverride();
        $price_rule->usage_limit                                = $data->usage_limit ?? null;
        $price_rule->value                                      = $data->value ?? null;
        $price_rule->allocation_method                          = $data->allocation_method ?? null;
        $price_rule->created_at                                 = $data->created_at ?? null;
        $price_rule->customer_selection                         = $data->customer_selection ?? null;
        $price_rule->ends_at                                    = $data->ends_at ?? null;
        $price_rule->id                                         = $data->id ?? null;
        $price_rule->starts_at                                  = $data->starts_at ?? null;
        $price_rule->target_selection                           = $data->target_selection ?? null;
        $price_rule->target_type                                = $data->target_type ?? null;
        $price_rule->title                                      = $data->title ?? null;
        $price_rule->value_type                                 = $data->value_type ?? null;
        $price_rule->entitled_collection_ids                    = $data->entitled_collection_ids ?? [];
        $price_rule->entitled_country_ids                       = $data->entitled_country_ids ?? [];
        $price_rule->entitled_product_ids                       = $data->entitled_product_ids ?? [];
        $price_rule->entitled_variant_ids                       = $data->entitled_variant_ids ?? [];
        $price_rule->prerequisite_customer_ids                  = $data->prerequisite_customer_ids ?? [];
        $price_rule->prerequisite_quantity_range                = $data->prerequisite_quantity_range ?? [];
        $price_rule->prerequisite_saved_search_ids              = $data->prerequisite_saved_search_ids ?? [];
        $price_rule->prerequisite_shipping_price_range          = $data->prerequisite_shipping_price_range ?? [];
        $price_rule->prerequisite_subtotal_range                = $data->prerequisite_subtotal_range ?? [];
        $price_rule->prerequisite_product_ids                   = $data->prerequisite_product_ids ?? [];
        $price_rule->prerequisite_variant_ids                   = $data->prerequisite_variant_ids ?? [];
        $price_rule->prerequisite_collection_ids                = $data->prerequisite_collection_ids ?? [];
        $price_rule->prerequisite_to_entitlement_quantity_ratio = $data->prerequisite_to_entitlement_quantity_ratio ?? [];
        $price_rule->once_per_customer                          = $data->once_per_customer ?? null;

        return $price_rule;
    }
}