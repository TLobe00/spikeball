<?php

namespace BVAccel\ShopifyApiWrapper\Coordinators;

use BVAccel\ShopifyApiWrapper\StoreConfig;
use BVAccel\ShopifyApiWrapper\Traits\CustomerResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\InventoryResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\OnlineStoreResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\OrderResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\PriceRuleResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\ProductResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\BlogResourceTrait;

class ResourceCoordinator extends Coordinator
{
    use CustomerResourceTrait;
    use ProductResourceTrait;
    use InventoryResourceTrait;
    use PriceRuleResourceTrait;
    use OrderResourceTrait;
    use OnlineStoreResourceTrait;
    use BlogResourceTrait;

    /**
     * @var array|StoreConfig[]
     */
    protected $all_configs;

    /**
     * ResourceCoordinator constructor.
     *
     * @param StoreConfig   $default_store
     * @param StoreConfig[] $store_configs
     */
    public function __construct(StoreConfig $default_store, array $store_configs)
    {
        parent::__construct($default_store);

        $this->all_configs = $store_configs;
    }

    /**
     * Store
     *
     * Specify the store to make an API call to. If not specified the default store will be used.
     *
     * @param $store_name
     * @return ConfiguredResourceCoordinator
     */
    public function store($store_name)
    {
        return new ConfiguredResourceCoordinator($this->all_configs[ $store_name ]);
    }
}
