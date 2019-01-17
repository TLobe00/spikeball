<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait PublishedParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait PublishedStatusParameterTrait
{
    /**
     * Published Status
     *
     * Show items by their published status
     *
     * @param string $published_status
     * @return $this
     */
    public function publishedStatus(string $published_status)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('published_status', $published_status);
        }

        return $this;
    }
}