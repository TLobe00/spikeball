<?php

namespace BVAccel\ShopifyApiWrapper\Contracts;


use Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * Get
     *
     * Perform GET request and get response
     *
     * @param string $uri
     * @param array  $query_params
     * @return ResponseInterface
     */
    public function get(string $uri, array $query_params = []): ResponseInterface;

    /**
     * Post
     *
     * Perform POST request and get response
     *
     * @param string $uri
     * @param array  $json_payload
     * @return ResponseInterface
     */
    public function post(string $uri, array $json_payload): ResponseInterface;

    /**
     * Post
     *
     * Perform PUT request and get response
     *
     * @param string $uri
     * @param array  $json_payload
     * @return ResponseInterface
     */
    public function put(string $uri, array $json_payload): ResponseInterface;

    /**
     * Delete
     *
     * Perform DELETE request and get response
     *
     * @param string $uri
     * @return ResponseInterface
     */
    public function delete(string $uri): ResponseInterface;
}