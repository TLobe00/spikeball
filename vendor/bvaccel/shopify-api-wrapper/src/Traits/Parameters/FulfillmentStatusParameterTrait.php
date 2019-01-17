<?php

namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait FulfillmentStatusParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait FulfillmentStatusParameterTrait
{
    /**
     * FulfillmentStatus
     *
     * @param string $fulfillment_status
     * @return $this
     */
    public function fulfillmentStatus(string $fulfillment_status)
    {
        if ($this instanceof ParameterBuilder){
            $this->setParameter('fulfillment_status', $fulfillment_status);
        }

        return $this;
    }
}