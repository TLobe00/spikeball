<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait FieldsParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait IdsParameterTrait
{
    /**
     * Ids
     *
     * @param array $ids Included fields
     * @return $this
     */
    public function ids(array $ids)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('ids', implode(',', $ids));
        }

        return $this;
    }
}