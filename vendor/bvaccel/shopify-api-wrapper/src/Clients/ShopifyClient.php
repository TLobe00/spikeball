<?php

namespace BVAccel\ShopifyApiWrapper\Clients;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use BVAccel\ShopifyApiWrapper\Contracts\ClientInterface;
use BVAccel\ShopifyApiWrapper\StoreConfig;

/**
 * Class ShopifyClient
 *
 * @package BVAccel\ShopifyApiWrapper\Clients
 */
class ShopifyClient implements ClientInterface
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * BaseRequest constructor.
     *
     * @param StoreConfig $config
     */
    public function __construct(StoreConfig $config)
    {
        $this->client = new Client([
            'base_uri'   => "https://{$config->key()}:{$config->password()}@{$config->domain()}/admin/",
            'exceptions' => false,
        ]);
    }

    /**
     * Get
     *
     * @param string $uri
     * @param array  $query_params
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function get(string $uri, array $query_params = []): ResponseInterface
    {
        return $this->client->get($uri, [
            'query' => $query_params,
        ]);
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
        return $this->client->post($uri, ['json' => $json_payload]);
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
        return $this->client->put($uri, ['json' => $json_payload]);
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
        return $this->client->delete($uri);
    }
}