<?php


namespace BVAccel\ShopifyApiWrapper\Responses;


use Psr\Http\Message\ResponseInterface;

abstract class BaseNullResponse
{
    use ResponseDataTrait;

    /**
     * NullResponse constructor.
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->setUpData($response);
    }
}