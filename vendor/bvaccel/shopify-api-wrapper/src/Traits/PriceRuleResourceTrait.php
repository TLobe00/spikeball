<?php


namespace BVAccel\ShopifyApiWrapper\Traits;


use BVAccel\ShopifyApiWrapper\Requests\PriceRuleDiscountCodeRequest;
use BVAccel\ShopifyApiWrapper\Requests\PriceRuleRequest;

trait PriceRuleResourceTrait
{
    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\PriceRuleRequest
     */
    public function priceRule()
    {
        return new PriceRuleRequest($this->client);
    }

    /**
     * @return \BVAccel\ShopifyApiWrapper\Requests\PriceRuleDiscountCodeRequest
     */
    public function discountCode()
    {
        return new PriceRuleDiscountCodeRequest($this->client);
    }
}