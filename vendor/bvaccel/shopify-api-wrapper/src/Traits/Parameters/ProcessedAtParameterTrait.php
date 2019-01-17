<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait ProcessedAtParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait ProcessedAtParameterTrait
{
    /**
     * Processed at Min
     *
     * Show items last processed before date
     *
     * @param string $processed_at_min
     * @return $this
     */
    public function processedAtMin(string $processed_at_min)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('processed_at_min', $processed_at_min);
        }

        return $this;
    }

    /**
     * Processed at Max
     *
     * Show items last processed after date
     *
     * @param string $processed_at_max
     * @return $this
     */
    public function processedAtMax(string $processed_at_max)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('processed_at_max', $processed_at_max);
        }

        return $this;
    }
}