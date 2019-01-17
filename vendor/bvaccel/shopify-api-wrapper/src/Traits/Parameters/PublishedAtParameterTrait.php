<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait PublishedAtParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait PublishedAtParameterTrait
{
    /**
     * Published at Min
     *
     * Show items last published before date
     *
     * @param string $published_at_min
     * @return $this
     */
    public function publishedAtMin(string $published_at_min)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('published_at_min', $published_at_min);
        }

        return $this;
    }

    /**
     * Published at Max
     *
     * Show items last published after date
     *
     * @param string $published_at_max
     * @return $this
     */
    public function publishedAtMax(string $published_at_max)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('published_at_max', $published_at_max);
        }

        return $this;
    }
}