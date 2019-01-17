<?php

namespace BVAccel\ShopifyApiWrapper\Parameters;


use BVAccel\ShopifyApiWrapper\Traits\Parameters\IdsParameterTrait;
use BVAccel\ShopifyApiWrapper\Traits\Parameters\InventoryItemIdsParameterTrait;

/**
 * Class InventoryLevelParameters
 *
 * @package BVAccel\ShopifyApiWrapper\Parameters
 */
class InventoryLevelParameters extends ParameterBuilder
{
    use IdsParameterTrait, InventoryItemIdsParameterTrait;
}