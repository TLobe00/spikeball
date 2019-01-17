<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait FieldsParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait TitleParameterTrait
{
    /**
     * Title
     *
     * Filter results by title
     *
     * @param string $title
     * @return $this
     */
    public function title(string $title)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('title', $title);
        }

        return $this;
    }
}