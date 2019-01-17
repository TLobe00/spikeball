<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;


use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait KeyParameterTrait
 * @package BVAccel\ShopifyApiWrapper\Traits\Parameters
 */
trait KeyParameterTrait
{
    /**
     * @param $key
     * @return $this
     */
    public function key($key)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('key', $key);
        }

        return $this;
    }
}