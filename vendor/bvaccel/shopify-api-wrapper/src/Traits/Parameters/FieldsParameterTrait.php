<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait FieldsParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait FieldsParameterTrait
{
    /**
     * Fields
     *
     * Limit response data to a specified list of fields
     *
     * @param array $fields Included fields
     * @return $this
     */
    public function fields(array $fields)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('fields', implode(',', $fields));
        }

        return $this;
    }
}