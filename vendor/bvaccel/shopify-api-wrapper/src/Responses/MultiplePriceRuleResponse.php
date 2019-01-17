<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\PriceRuleResponseConverter;
use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;
use BVAccel\ShopifyResources\Resources\PriceRule;

/**
 * Class MultiplePriceRuleResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class MultiplePriceRuleResponse extends MultipleResourceResponse
{
    /**
     * @return \BVAccel\ShopifyResources\Resources\ShopifyResource[]|PriceRule[]
     */
    public function priceRules()
    {
        return $this->data;
    }

    /**
     * Response Data Parser
     *
     * @return ResponseConverter
     */
    protected function _getConverter(): ResponseConverter
    {
        return new PriceRuleResponseConverter();
    }

    /**
     * Get Parsable
     *
     * @return mixed
     */
    protected function _getConvertible()
    {
        return $this->body()->price_rules ?? [];
    }
}