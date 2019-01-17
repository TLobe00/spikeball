<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\PriceRuleParameters;
use BVAccel\ShopifyResources\Resources\PriceRule;
use BVAccel\ShopifyApiWrapper\Responses\MultiplePriceRuleResponse;
use BVAccel\ShopifyApiWrapper\Responses\SinglePriceRuleResponse;

/**
 * Class PriceRuleRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class PriceRuleRequest extends ShopifyRequest
{
    /**
     * @param PriceRuleParameters|null $parameters
     * @return MultiplePriceRuleResponse
     */
    public function all(?PriceRuleParameters $parameters = null)
    {
        return new MultiplePriceRuleResponse(
            $this->client->get("price_rules.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param PriceRule $price_rule
     * @return SinglePriceRuleResponse
     */
    public function create(PriceRule $price_rule)
    {
        return new SinglePriceRuleResponse(
            $this->client->post("price_rules.json", ['price_rule' => $price_rule->changedProperties()])
        );
    }

    /**
     * @param $price_rule_id
     * @return SinglePriceRuleResponse
     */
    public function find($price_rule_id)
    {
        return new SinglePriceRuleResponse(
            $this->client->get("price_rules/$price_rule_id.json")
        );
    }

    /**
     * @param           $price_rule_id
     * @param PriceRule $price_rule
     * @return SinglePriceRuleResponse
     */
    public function update($price_rule_id, PriceRule $price_rule)
    {
        return new SinglePriceRuleResponse(
            $this->client->put("price_rules/$price_rule_id", ['price_rule' => $price_rule->changedProperties()])
        );
    }

    public function delete($price_rule_id)
    {
        #todo
    }
}