<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


/**
 * Class CountResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
class CountResponse extends BaseCountResponse
{
    /**
     * @return mixed
     */
    public function count()
    {
        return $this->body()->count;
    }
}