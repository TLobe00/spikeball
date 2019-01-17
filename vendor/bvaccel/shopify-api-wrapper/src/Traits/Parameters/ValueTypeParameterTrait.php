<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;


use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait ValueTypeParameterTrait
 * @package BVAccel\ShopifyApiWrapper\Traits\Parameters
 */
trait ValueTypeParameterTrait
{
    /**
     * @param $value_type
     * @return $this
     */
    public function valueType($value_type)
    {
        if($this instanceof ParameterBuilder) {
            $this->setParameter('value_type', $value_type);
        }

        return $this;
    }
}