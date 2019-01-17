<?php

namespace BVAccel\ShopifyResources\Resources\Properties;


class BasicProperty extends ResourceProperty
{
    /**
     * @var null
     */
    private $allowed_enum_values = [];

    /**
     * Get Changes
     *
     * @return mixed
     * @throws \Exception
     */
    public function getChanges()
    {
        if (!$this->hasChanged()) {
            throw new \Exception("Call to getChanges() on an unchanged property");
        }

        return $this->value();
    }

    /**
     * Accepts Value
     *
     * @param $value
     * @return bool
     */
    public function acceptsValue($value): bool
    {
        return in_array(gettype($value), $this->accepts);
    }

    /**
     * Value is Different
     *
     * @param $value
     * @return bool
     */
    public function valueIsDifferent($value): bool
    {
        return $this->value() !== $value;
    }

    /**
     * Enum
     *
     * Define enumerated values for a property.
     *
     * @param array $allow
     * @return BasicProperty
     * @throws \Exception
     */
    public function enum(array $allow)
    {
        if (sizeof($allow) < 2) {
            throw new \Exception("Invalid enum definition");
        }

        $this->allowed_enum_values = $allow;

        return $this;
    }

    /**
     * Set Value
     *
     * @param      $value
     * @param bool $is_in_override_mode
     * @throws \Exception
     */
    public function setValue($value, bool $is_in_override_mode)
    {
        if ($is_in_override_mode or !sizeof($this->allowed_enum_values)) {
            parent::setValue($value, $is_in_override_mode);
        } elseif (!in_array($value, $this->allowed_enum_values)) {
            throw  new \Exception("$this->name cannot be set to $value. Allowable values are: " . implode(', ', $this->allowed_enum_values));
        }

        parent::setValue($value, $is_in_override_mode);
    }
}