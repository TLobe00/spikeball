<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyResources\Resources\DiscountCode;
use BVAccel\ShopifyApiWrapper\Responses\MultiplePriceRuleResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleDiscountCodeResponse;

class PriceRuleDiscountCodeRequest extends ShopifyRequest
{
    /**
     * All
     *
     * @param $price_rule_id
     * @return MultiplePriceRuleResponse
     */
    public function all($price_rule_id)
    {
        return new MultiplePriceRuleResponse(
            $this->client->get("price_rules/$price_rule_id/discount_codes.json")
        );
    }

    /**
     * Create
     *
     * @param              $price_rule_id
     * @param DiscountCode $discount_code
     * @return SingleDiscountCodeResponse
     */
    public function create($price_rule_id, DiscountCode $discount_code)
    {
        return new SingleDiscountCodeResponse(
            $this->client->post("price_rules/$price_rule_id/discount_codes.json", [
                'discount_code' => $discount_code->changedProperties(),
            ])
        );
    }

    /**
     * Find
     *
     * @param $price_rule_id
     * @param $discount_code_id
     * @return SingleDiscountCodeResponse
     */
    public function find($price_rule_id, $discount_code_id)
    {
        return new SingleDiscountCodeResponse(
            $this->client->get("price_rules/$price_rule_id/discount_codes/$discount_code_id.json")
        );
    }

    /**
     * Update
     *
     * @param              $price_rule_id
     * @param              $discount_code_id
     * @param DiscountCode $discount_code
     * @return SingleDiscountCodeResponse
     */
    public function update($price_rule_id, $discount_code_id, DiscountCode $discount_code)
    {
        return new SingleDiscountCodeResponse(
            $this->client->put("price_rules/$price_rule_id/discount_codes/$discount_code_id.json", [
                'discount_code' => $discount_code->changedProperties(),
            ])
        );
    }

    public function delete($price_rule_id, $discount_code_id)
    {
        #todo
    }
}