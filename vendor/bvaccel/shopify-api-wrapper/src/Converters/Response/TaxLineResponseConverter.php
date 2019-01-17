<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\ShopifyResource;
use BVAccel\ShopifyResources\Resources\TaxLine;

class TaxLineResponseConverter extends ResponseConverter
{
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
        $tax_line = new TaxLine;
        $tax_line->allowOverride();

        $tax_line->price = $data->price;
        $tax_line->rate  = $data->rate;
        $tax_line->title = $data->title;

        return $tax_line;
    }
}