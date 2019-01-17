<?php

namespace BVAccel\ShopifyResources\Resources\Properties;


class ResourcePropertiesContainer
{
    /**
     * @var string
     */
    private $resource_name;

    /**
     * @var ResourceProperty[]
     */
    private $properties = [];

    private $is_in_override_mode = false;

    /**
     * ResourcePropertiesContainer constructor.
     *
     * @param string             $resource_name
     * @param ResourceProperty[] $properties
     */
    public function __construct(string $resource_name, array $properties)
    {
        $this->resource_name = $resource_name;

        foreach ($properties as $property) {
            $this->properties[ $property->name() ] = $property;
        }
    }

    /**
     * Allow Override
     */
    public function allowOverride()
    {
        $this->is_in_override_mode = true;
    }

    /**
     * Get Property Value
     *
     * @param $property_name
     * @return mixed
     * @throws \Exception
     */
    public function getPropertyValue($property_name)
    {
        !array_key_exists($property_name, $this->properties) ? $this->_throwPropertyNotFoundException($property_name) : null;

        return $this->properties[ $property_name ]->value();
    }

    /**
     * Set Property Value
     *
     * @param $property_name
     * @param $value
     * @throws \Exception
     */
    public function setPropertyValue($property_name, $value)
    {
        // don't accept properties that the container doesn't have
        !array_key_exists($property_name, $this->properties) ? $this->_throwPropertyNotFoundException($property_name) : null;

        // set value if everything checks out
        $this->properties[ $property_name ]->setValue($value, $this->is_in_override_mode);
    }

    /**
     * Throw Property Not Found Exception
     *
     * @param $property_name
     * @throws \Exception
     */
    private function _throwPropertyNotFoundException($property_name)
    {
        throw new \Exception("{$this->resource_name} does not have the property " . $property_name);
    }

    /**
     * Reset
     *
     * Reset values to be considered unchanged
     */
    public function reset()
    {
        foreach ($this->properties as $property) {
            $property->reset();
        }

        $this->is_in_override_mode = false;
    }

    /**
     * Get Changed Values
     *
     * @return array
     */
    public function getChangedValues()
    {
        foreach ($this->properties as $key => $property) {
            $property->hasChanged() ? $changes[ $key ] = $property->getChanges() : null;
        }

        return $changes ?? [];
    }
}