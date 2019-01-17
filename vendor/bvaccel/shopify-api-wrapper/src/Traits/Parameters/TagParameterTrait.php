<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait TagParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait TagParameterTrait
{
    /**
     * Tag
     *
     * Show items by their tags
     *
     * @param string $tag
     * @return $this
     */
    public function tag(string $tag)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('tag', $tag);
        }

        return $this;
    }
}
