<?php


namespace BVAccel\ShopifyApiWrapper\Requests;


use BVAccel\ShopifyApiWrapper\Contracts\ClientInterface;

abstract class ShopifyRequest
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * RequestInterface constructor.
     *
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }
}