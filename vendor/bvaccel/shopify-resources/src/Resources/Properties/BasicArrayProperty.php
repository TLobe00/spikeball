<?php

namespace BVAccel\ShopifyResources\Resources\Properties;


class BasicArrayProperty extends ResourceProperty
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
            $type = gettype($value);
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

        return $this->value();
    }
}