<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;

use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class ShopifyJsonToDtoParser
 *
 * Abstract class for converting JSON response data to DTO
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
abstract class ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource
     */
    abstract protected function process(\stdClass $data): ShopifyResource;

    /**
     * Parse Child Collection (Helper Method)
     *
     * Parse any child collections to ShopifyResources
     *
     * @param ResponseConverter $parser
     * @param                   $collection
     * @return array
     */
    protected function parseChildCollection(ResponseConverter $parser, $collection)
    {
        foreach ($collection as $item_data) {
            $items[] = $parser->getResponseResource($item_data);
        }

        return $items ?? [];
    }

    /**
     * @param $data
     * @return ShopifyResource
     */
    public function getResponseResource($data)
    {
        $resource = $this->process($data);
        $resource->refresh();

        return $resource;
    }
}