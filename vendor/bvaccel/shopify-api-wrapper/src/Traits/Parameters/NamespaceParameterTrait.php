<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;


use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait NamespaceParameterTrait
 * @package BVAccel\ShopifyApiWrapper\Traits\Parameters
 */
trait NamespaceParameterTrait
{
    /**
     * @param $namespace
     * @return $this
     */
    public function namespace($namespace)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('namespace', $namespace);
        }

        return $this;
    }
}