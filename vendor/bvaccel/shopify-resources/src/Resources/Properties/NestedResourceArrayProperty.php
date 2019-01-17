<?php

namespace BVAccel\ShopifyResources\Resources\Properties;

use BVAccel\ShopifyResources\Resources\ShopifyResource;

class NestedResourceArrayProperty extends ResourceProperty
{
    /**
     * Accepts Value
     *
     * @param $values
     * @return bool
     */
    public function acceptsValue($values): bool
    {
        // must be an array
        if (!is_array($values)) {
            return false;
        }

        // each value of array must be acceptable
        foreach ($values as $value) {
            $type = get_class($value);
            if (!in_array($type, $this->accepts)) return false;
        }

        return true;
    }

    public function valueIsDifferent($values): bool
    {
        return $this->value() !== $values;
    }

    /**
     * Get Changes
     *
     * @return mixed
     * @throws \Exception
     */
    public function getChanges()
    {
        if (!$this->hasChanged()){
            throw  new \Exception("Call to getChanges() on unchanged property");
        }

        /** @var ShopifyResource $shopify_resource */
        foreach ($this->value() as $shopify_resource){
            sizeof($changed_properties = $shopify_resource->changedProperties()) ? $changes[] = $changed_properties : null;
        }

        return $changes ?? null;
    }
}