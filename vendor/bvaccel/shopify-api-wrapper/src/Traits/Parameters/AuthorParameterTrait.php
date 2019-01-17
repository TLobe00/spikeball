<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait AuthorParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait AuthorParameterTrait
{
    /**
     * Author
     *
     * Show items by their author
     *
     * @param string $author
     * @return $this
     */
    public function author(string $author)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('author', $author);
        }

        return $this;
    }
}
