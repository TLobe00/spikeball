<?php


namespace BVAccel\ShopifyApiWrapper\Traits\Parameters;

use BVAccel\ShopifyApiWrapper\Parameters\ParameterBuilder;

/**
 * Trait InventoryItemIdsParameterTrait
 *
 * @package BVAccel\ShopifyApiWrapper\Traits
 */
trait InventoryItemIdsParameterTrait
{
    /**
     * Inventory Item Ids
     *
     * @param array $inventory_item_ids
     * @return $this
     */
    public function inventoryItemIds(array $inventory_item_ids)
    {
        if ($this instanceof ParameterBuilder) {
            $this->setParameter('inventory_item_ids', implode(',', $inventory_item_ids));
        }

        return $this;
    }
}