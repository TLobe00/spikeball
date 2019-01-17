<?php

namespace BVAccel\ShopifyApiWrapper\Coordinators;

use BVAccel\ShopifyApiWrapper\Clients\ShopifyClient;
use BVAccel\ShopifyApiWrapper\Contracts\ClientInterface;
use BVAccel\ShopifyApiWrapper\StoreConfig;

abstract class Coordinator
{
    /**
     * @var StoreConfig
     */
    protected $store_config;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * ConfiguredResourceCoordinator constructor.
     *
     * @param $store_config
     */
    public function __construct($store_config)
    {
        $this->store_config = $store_config;
        $this->client = new ShopifyClient($store_config);
    }
}