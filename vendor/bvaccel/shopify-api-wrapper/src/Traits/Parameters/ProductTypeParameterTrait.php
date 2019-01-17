<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait ProductTypeParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait ProductTypeParameterTrait
{
    /**
     * ProductType
     *
     * Filter results by productType
     *
     * @param string $product_type
     * @return $this
     */
    public function productType(string $product_type)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('product_type', $product_type);
        }

        return $this;
    }
}