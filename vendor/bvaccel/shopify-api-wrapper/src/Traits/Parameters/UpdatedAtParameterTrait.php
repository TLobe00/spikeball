<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait VendorParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait UpdatedAtParameterTrait
{
    /**
     * Updated At Min
     *
     * Show items last updated before date
     *
     * @param string $updated_at_min
     * @return $this
     */
    public function updatedAtMin(string $updated_at_min)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('updated_at_min', $updated_at_min);
        }

        return $this;
    }

    /**
     * Updated At Max
     *
     * Show items last updated after date
     *
     * @param string $updated_at_max
     * @return $this
     */
    public function updatedAtMax(string $updated_at_max)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('updated_at_max', $updated_at_max);
        }

        return $this;
    }
}