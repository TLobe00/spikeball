<?php

namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait FinancialStatusParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait FinancialStatusParameterTrait
{
    /**
     * FinancialStatus
     *
     * @param string $financial_status
     * @return $this
     */
    public function financialStatus(string $financial_status)
    {
        if ($this instanceof ParameterBuilder){
            $this->setParameter('financial_status', $financial_status);
        }

        return $this;
    }
}