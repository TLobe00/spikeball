<?php

namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\Customer;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class CustomerResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class CustomerResponseConverter extends ResponseConverter
{
    /**
     * @var CustomerAddressResponseConverter
     */
    protected $address_parser;

    /**
     * @var MetafieldResponseConverter
     */
    protected $metafield_parser;

    /**
     * CustomerJsonParser constructor.
     */
    public function __construct()
    {
        $this->address_parser   = new CustomerAddressResponseConverter;
        $this->metafield_parser = new MetafieldResponseConverter;
    }

    /**
     * @param \stdClass $json
     * @return ShopifyResource|Customer
     */
    protected function process(\stdClass $json): ShopifyResource
    {
        $customer = new Customer();
        $customer->allowOverride();
        $customer->accepts_marketing    = $json->accepts_marketing ?? null;
        $customer->tax_exempt           = $json->tax_exempt ?? null;
        $customer->verified_email       = $json->verified_email ?? null;
        $customer->id                   = $json->id ?? null;
        $customer->created_at           = $json->created_at ?? null;
        $customer->email                = $json->email ?? null;
        $customer->first_name           = $json->first_name ?? null;
        $customer->last_name            = $json->last_name ?? null;
        $customer->last_order_id        = $json->last_order_id ?? null;
        $customer->last_order_name      = $json->last_order_name ?? null;
        $customer->multipass_identifier = $json->multipass_identifier ?? null;
        $customer->note                 = $json->note ?? null;
        $customer->phone                = $json->phone ?? null;
        $customer->state                = $json->state ?? null;
        $customer->total_spent          = $json->total_spent ?? null;
        $customer->updated_at           = $json->updated_at ?? null;
        $customer->orders_count         = $json->orders_count ?? null;
        $customer->addresses            = $this->parseChildCollection($this->address_parser, $json->addresses ?? []);
        $customer->default_address      = $json->default_address ?? false ? $this->address_parser->process($json->default_address) : null;
        $customer->metafield            = $json->metafield ?? false ? $this->metafield_parser->process($json->metafield) : null;
        $customer->tags                 = $json->tags ?? false ? explode(',', $json->tags) : [];

        return $customer;
    }
}