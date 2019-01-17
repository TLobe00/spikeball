<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait PageParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait PageParameterTrait
{
    /**
     * Page
     *
     * Return a specific page of results.
     *
     * @param string|int $page
     * @return $this
     */
    public function page($page)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('page', $page);
        }

        return $this;
    }
}