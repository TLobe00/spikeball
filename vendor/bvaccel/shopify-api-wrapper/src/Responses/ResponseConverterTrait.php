<?php

namespace BVAccel\ShopifyApiWrapper\Responses;


use BVAccel\ShopifyApiWrapper\Converters\Response\ResponseConverter;

trait ResponseConverterTrait
{
    /**
     * @var ResponseConverter
     */
    protected $converter;

    /**
     * Response Data Parser
     *
     * @return ResponseConverter
     */
    abstract protected function _getConverter(): ResponseConverter;

    /**
     * Get Parsable
     *
     * @return mixed
     */
    abstract protected function _getConvertible();

    /**
     * @return mixed
     */
    abstract protected function _prepareShopifyResource(): void;

    /**
     *
     */
    public function setUpResponseConverter(): void
    {
        $this->converter = $this->_getConverter();
        $this->_prepareShopifyResource();
    }
}