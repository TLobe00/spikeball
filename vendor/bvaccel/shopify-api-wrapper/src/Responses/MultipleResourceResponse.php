<?php

namespace BVAccel\ShopifyApiWrapper\Responses;


use Psr\Http\Message\ResponseInterface;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class MultipleResourceResponse
 * @package BVAccel\ShopifyApiWrapper\Responses
 */
abstract class MultipleResourceResponse
{
    use ResponseConverterTrait, ResponseDataTrait;

    /**
     * @var ShopifyResource[]
     */
    protected $data = [];

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
        $this->setUpResponseConverter();
    }

    /**
     * Prepare Shopify Resources
     */
    protected function _prepareShopifyResource()
    {
        foreach ($this->_getConvertible() as $convertible){
            $this->data[] = $this->converter->getResponseResource($convertible);
        }
    }
}