<?php

namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyResources\Resources\SmartCollection;
use BVAccel\ShopifyApiWrapper\Responses\SingleSmartCollectionResponse;

/**
 * Class ProductRequest
 *
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class SmartCollectionRequest extends ShopifyRequest
{
    /**
     * All
     *
     */
    public function all()
    {

    }

    /**
     * Create
     *
     * @param SmartCollection $smart_collection
     * @return SingleSmartCollectionResponse
     */
    public function create(SmartCollection $smart_collection)
    {
        return new SingleSmartCollectionResponse(
            $this->client->post("smart_collections.json", ['smart_collection' => $smart_collection->changedProperties()])
        );
    }

    /**
     * Find
     *
     * @param int $smart_collection_id
     * @return  SingleSmartCollectionResponse
     */
    public function find($smart_collection_id)
    {
        return new  SingleSmartCollectionResponse(
            $this->client->get("smart_collections/$smart_collection_id.json")
        );
    }

    /**
     * Update
     *
     * @param                 $smart_collection_id
     * @param SmartCollection $smart_collection
     * @return  SingleSmartCollectionResponse
     */
    public function update(int $smart_collection_id, SmartCollection $smart_collection)
    {
        return new  SingleSmartCollectionResponse($this->client->put("smart_collections/$smart_collection_id.json", [
            'smart_collection' => $smart_collection->changedProperties(),
        ]));
    }

    /**
     * Delete
     *
     * @param $product_id
     */
    public function delete($product_id)
    {
        #todo
    }
}