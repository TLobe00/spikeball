<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use Psr\Http\Message\ResponseInterface;

abstract class BaseCountResponse
{
    use ResponseDataTrait;

    /**
     * CountResponse constructor.
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->setUpData($response);
    }
}