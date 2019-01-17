<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait FieldsParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait SinceIdParameterTrait
{
    /**
     * Since Id
     *
     * Restrict results to after the specified ID.
     *
     * @param $since_id
     * @return $this
     */
    public function sinceId($since_id)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('since_id', $since_id);
        }

        return $this;
    }
}