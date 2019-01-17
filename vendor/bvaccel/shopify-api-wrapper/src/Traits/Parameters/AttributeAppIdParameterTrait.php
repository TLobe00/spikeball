<?php

namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait AttributeAppIdParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait AttributeAppIdParameterTrait
{
    /**
     * AttributeAppId
     *
     * @param string $attribute_app_id
     * @return $this
     */
    public function attributeAppId(string $attribute_app_id)
    {
        if ($this instanceof ParameterBuilder){
            $this->setParameter('attribute_app_id', $attribute_app_id);
        }

        return $this;
    }
}