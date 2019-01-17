<?php

namespace BVAccel\ShopifyApiWrapper\Coordinators;


use BVAccel\ShopifyApiWrapper\Traits\CustomerResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\InventoryResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\OnlineStoreResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\OrderResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\PriceRuleResourceTrait;
use BVAccel\ShopifyApiWrapper\Traits\ProductResourceTrait;

class ConfiguredResourceCoordinator extends Coordinator
{
    use ProductResourceTrait;
    use InventoryResourceTrait;
    use CustomerResourceTrait;
    use OnlineStoreResourceTrait;
    use PriceRuleResourceTrait;
    use OrderResourceTrait;
}