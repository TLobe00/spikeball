<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait CollectionIdParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait CollectionIdParameterTrait
{
    /**
     * Collection Id
     *
     * Filter results by collection ID.
     *
     * @param string|int $collection_id
     * @return $this
     */
    public function collectionId($collection_id)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('collection_id', $collection_id);
        }

        return $this;
    }
}