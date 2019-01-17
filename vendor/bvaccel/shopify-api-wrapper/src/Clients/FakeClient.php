<?php

namespace BVAccel\ShopifyApiWrapper\Clients;

use BVAccel\ShopifyApiWrapper\Contracts\ClientInterface;
use BVAccel\ShopifyApiWrapper\StoreConfig;
use Psr\Http\Message\ResponseInterface;

/**
 * Class FakeClient
 *
 * @package BVAccel\ShopifyApiWrapper\Clients
 */
class FakeClient implements ClientInterface
{
    /**
     * @var FakeResponseFactory
     */
    protected $client;

    /**
     * BaseRequest constructor.
     *
     * @param StoreConfig $config
     */
    public function __construct(StoreConfig $config)
    {
        $this->client = new FakeResponseFactory();
    }

    /**
     * Get
     *
     * Perform GET request and get response
     *
     * @param string $uri
     * @param array  $query_params
     * @return ResponseInterface
     */
    public function get(string $uri, array $query_params = []): ResponseInterface
    {
        return $this->client->createResponse();
    }

    /**
     * Post
     *
     * Perform POST request and get response
     *
     * @param string $uri
     * @param array  $json_payload
     * @return ResponseInterface
     */
    public function post(string $uri, array $json_payload): ResponseInterface
    {
        return $this->client->createResponse(
            200,
            "Success",
            [],
            $json_payload
        );
    }

    /**
     * Post
     *
     * Perform PUT request and get response
     *
     * @param string $uri
     * @param array  $json_payload
     * @return ResponseInterface
     */
    public function put(string $uri, array $json_payload): ResponseInterface
    {
        return $this->client->createResponse();
    }

    /**
     * Delete
     *
     * Perform DELETE request and get response
     *
     * @param string $uri
     * @return ResponseInterface
     */
    public function delete(string $uri): ResponseInterface
    {
        return $this->client->createResponse();
    }
}