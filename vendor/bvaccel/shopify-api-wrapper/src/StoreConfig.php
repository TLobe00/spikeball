<?php

namespace BVAccel\ShopifyApiWrapper;

/**
 * Class StoreConfig
 *
 * @package BVAccel\ShopifyApiWrapper
 */
class StoreConfig
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $password;

    /**
     * StoreConfig constructor.
     *
     * @param string $domain
     * @param string $key
     * @param string $password
     */
    public function __construct(string $domain, string $key, string $password)
    {
        $this->domain   = $domain;
        $this->key      = $key;
        $this->password = $password;
    }

    /**
     * Domain
     *
     * @return string
     */
    public function domain()
    {
        return $this->domain;
    }

    /**
     * Key
     *
     * @return string
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * Password
     *
     * @return string
     */
    public function password()
    {
        return $this->password;
    }


}