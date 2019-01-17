<?php

namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait QueryParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait QueryParameterTrait
{
    /**
     * Query
     *
     * @param string $query
     * @return $this
     */
    public function query(string $query)
    {
        if ($this instanceof ParameterBuilder){
            $this->setParameter('query', $query);
        }

        return $this;
    }
}