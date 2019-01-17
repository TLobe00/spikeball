<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait VendorParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait VendorParameterTrait
{
    /**
     * Vendor
     *
     * Filter results by vendor
     *
     * @param string $vendor Included vendor
     * @return $this
     */
    public function vendor(string $vendor)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('vendor', $vendor);
        }

        return $this;
    }
}