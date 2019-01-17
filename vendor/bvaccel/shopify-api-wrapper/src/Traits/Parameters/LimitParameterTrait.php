<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait LimitParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait LimitParameterTrait
{
    /**
     * Limit
     *
     * Return a specific limit of results.
     *
     * @param string|int $limit
     * @return $this
     */
    public function limit($limit)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('limit', $limit);
        }

        return $this;
    }
}