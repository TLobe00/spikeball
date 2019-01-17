<?php

namespace BVAccel\ShopifyApiWrapper\Parameters;

use BVAccel\ShopifyApiWrapper\Traits\Parameters\IdsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\PageParameterTrait;

/**
 * Class InventoryItemParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class InventoryItemParameters extends ParameterBuilder
{
    use IdsParameterTrait,
        PageParameterTrait;
}