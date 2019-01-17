<?php

namespace BVAccel\ShopifyResources\Resources\Properties;

use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class NestedResourceProperty
 *
 * @package BVAccel\ShopifyResources\Resources\Properties
 * @method ShopifyResource value()
 */
class NestedResourceProperty extends ResourceProperty
{
    /**
     * Accepts Value
     *
     * @param $value
     * @return bool
     */
    public function acceptsValue($value): bool
    {
        return in_array(get_class($value), $this->accepts);
    }

    public function valueIsDifferent($value): bool
    {
        return $this->value() != $value;
    }

    /**
     * Get Changes
     *
     * @return mixed
     * @throws \Exception
     */
    public function getChanges()
    {
        if (!$this->hasChanged()) {
            throw  new \Exception("Call to getChanges() on unchanged property");
        }

        return $this->value()->changedProperties();
    }
}