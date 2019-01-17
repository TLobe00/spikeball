<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ShippingLine;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

class ShippingLineResponseConverter extends ResponseConverter
{
    /**
     * @var TaxLineResponseConverter
     */
    private $tax_line_converter;

    /**
     * ShippingLineResponseConverter constructor.
     */
    public function __construct()
    {
        $this->tax_line_converter = new TaxLineResponseConverter;
    }


    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $shipping_line = new ShippingLine;
        $shipping_line->allowOverride();

        $shipping_line->code                             = $data->code;
        $shipping_line->source                           = $data->source;
        $shipping_line->tax_lines                        = $this->parseChildCollection($this->tax_line_converter, $data->tax_lines ?? []);
        $shipping_line->price                            = $data->price;
        $shipping_line->carrier_identifier               = $data->carrier_identifier;
        $shipping_line->requested_fulfillment_service_id = $data->requested_fulfillment_service_id;

        return $shipping_line;
    }
}