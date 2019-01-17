<?php

namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait StatusParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait StatusParameterTrait
{
    /**
     * Status
     *
     * @param string $status
     * @return $this
     */
    public function status(string $status)
    {
        if ($this instanceof ParameterBuilder){
            $this->setParameter('status', $status);
        }

        return $this;
    }
}