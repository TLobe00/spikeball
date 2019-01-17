<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\OrderClientDetails;

class OrderClientDetailsResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $client_details = new OrderClientDetails;
        $client_details->allowOverride();
        $client_details->accept_language = $data->accept_language;
        $client_details->browser_height  = $data->browser_height;
        $client_details->browser_width   = $data->browser_width;
        $client_details->browser_ip      = $data->browser_ip;
        $client_details->session_hash    = $data->session_hash;
        $client_details->user_agent      = $data->user_agent;

        return $client_details;
    }
}