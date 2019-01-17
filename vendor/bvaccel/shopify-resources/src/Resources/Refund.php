<?php


namespace BVAccel\ShopifyResources\Resources;


use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;

class Refund extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Refund', [
            (new BasicProperty('id', ['string', 'integer']))->readOnly(),
            (new BasicProperty('order_id', ['string', 'integer']))->readOnly(),
            (new BasicProperty('user_id', ['string', 'integer']))->readOnly(),
            (new BasicProperty('created_at', ['string']))->readOnly(),

            new BasicProperty('restock', ['boolean']),
            new BasicProperty('note', ['string']),
        ]);
    }
}