<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

/**
 * Class PaymentDetails
 *
 * @package BVAccel\ShopifyResources\Resources
 *
 */
class PaymentDetails extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('PaymentDetails', [
            new BasicProperty('avs_result_code', ['string']),
            new BasicProperty('credit_card_bin', ['string']),
            new BasicProperty('cvv_result_code', ['string']),
            new BasicProperty('credit_card_number', ['string']),
            new BasicProperty('credit_card_company', ['string']),
        ]);
    }
}