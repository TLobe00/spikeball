<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;
use Exception;

/**
 * Class ShopifyResource
 *
 * @package BVAccel\ShopifyResources\Resources
 */
abstract class ShopifyResource
{
    /**
     * Properties
     *
     * @var ResourcePropertiesContainer
     */
    private $properties;

    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    abstract protected function buildPropertiesContainer(): ResourcePropertiesContainer;

    /**
     * ShopifyResource constructor.
     *
     * @param array|null $data
     */
    public function __construct(array $data = [])
    {
        $this->properties = $this->buildPropertiesContainer();
        $this->refresh();
        $this->_bulkLoadData($data);
    }

    /**
     * Bulk Load Data
     *
     * @param array $data
     */
    private function _bulkLoadData(array $data)
    {
        foreach ($data as $property => $value) {
            $this->$property = $value;
        }
    }

    /**
     * Refresh
     *
     * Set the object to unchanged state
     */
    public function refresh()
    {
        $this->properties->reset();
    }

    /**
     * Set
     *
     * @param $property
     * @param $value
     * @throws Exception
     */
    public function __set($property, $value)
    {
        $this->properties->setPropertyValue($property, $value);
    }

    /**
     * Get
     *
     * @param $property
     *
     * @return mixed
     * @throws Exception
     */
    public function __get($property)
    {
        return $this->properties->getPropertyValue($property);
    }

    /**
     * Allow Override
     *
     * This is meant for the APIs
     */
    public function allowOverride()
    {
        $this->properties->allowOverride();
    }

    /**
     * Changed Properties
     *
     * @return array
     */
    public function changedProperties()
    {
        return $this->properties->getChangedValues();
    }
}