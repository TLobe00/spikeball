<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait CreatedAtParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait CreatedAtParameterTrait
{
    /**
     * Created At Min
     *
     * Show items last created before date
     *
     * @param string $created_at_min
     * @return $this
     */
    public function createdAtMin(string $created_at_min)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('created_at_min', $created_at_min);
        }

        return $this;
    }

    /**
     * Created At Max
     *
     * Show items last created after date
     *
     * @param string $created_at_max
     * @return $this
     */
    public function createdAtMax(string $created_at_max)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('created_at_max', $created_at_max);
        }

        return $this;
    }
}