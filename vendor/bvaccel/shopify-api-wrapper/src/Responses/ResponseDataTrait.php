<?php

namespace BVAccel\ShopifyApiWrapper\Responses;


use Psr\Http\Message\ResponseInterface;

trait ResponseDataTrait
{
    /**
     * @var int
     */
    protected $status_code;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var \stdClass
     */
    protected $body;

    /**
     * @param ResponseInterface $response
     */
    public function setUpData(ResponseInterface $response)
    {
        $this->status_code = $response->getStatusCode();
        $this->message     = $response->getReasonPhrase();
        $this->body        = $response->getBody()->getContents();
    }

    /**
     * Message
     *
     * @return string
     */
    public function message(): string
    {
        return $this->message;
    }

    /**
     * Status Code
     *
     * @return int
     */
    public function statusCode(): int
    {
        return $this->status_code;
    }

    /**
     * Was Successful
     *
     * @return bool
     */
    public function wasSuccessful(): bool
    {
        return $this->status_code >= 200 and $this->status_code <= 299;
    }

    /**
     * Body
     *
     * @param bool $encoded
     * @return \stdClass|string
     */
    protected function body($encoded = true)
    {
        return $encoded ? json_decode($this->body) : $this->body;
    }

    /**
     * Encoded Body
     *
     * @return \stdClass
     */
    public function decodeBody()
    {
        return $this->body(true);
    }

    /**
     * Raw Body
     *
     * @return string
     */
    public function rawBody()
    {
        return $this->body(false);
    }
}