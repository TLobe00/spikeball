<?php

namespace BVAccel\ShopifyApiWrapper\Responses;

use Psr\Http\Message\ResponseInterface;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class SingleResourceResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
abstract class SingleResourceResponse
{
    use ResponseConverterTrait, ResponseDataTrait;

    /**
     * @var ShopifyResource
     */
    protected $data = null;

    /**
     * SingleResourceResponse constructor.
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->setUp($response);
    }

    /**
     * @param ResponseInterface $response
     */
    protected function setUp(ResponseInterface $response): void
    {
        $this->setUpData($response);
        if ($this->body()->errors ?? false){
            return;
        }
        $this->setUpResponseConverter();
    }

    /**
     * Prepare Shopify Resources
     */
    protected function _prepareShopifyResource()
    {
        $this->data = $this->converter->getResponseResource($this->_getConvertible());
    }
}