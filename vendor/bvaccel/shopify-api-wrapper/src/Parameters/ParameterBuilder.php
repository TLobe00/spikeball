<?php


namespace BVAccel\ShopifyApiWrapper\Parameters;

/**
 * Class ParameterBuilder
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
abstract class ParameterBuilder
{
    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * Set Parameter
     *
     * @param $key
     * @param $value
     */
    public function setParameter($key, $value)
    {
        $this->parameters[ $key ] = $value;
    }

    /**
     * Get Parameter
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}