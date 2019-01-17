<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait HandleParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait HandleParameterTrait
{
    /**
     * Handle
     *
     * Filter results by handle
     *
     * @param string $created_at_min
     * @return $this
     */
    public function handle(string $created_at_min)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('handle', $created_at_min);
        }

        return $this;
    }
}