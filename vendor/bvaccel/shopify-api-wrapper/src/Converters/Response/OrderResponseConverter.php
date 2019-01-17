<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\Order;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

/**
 * Class OrderResponseConverter
 *
 * @package BVAccel\ShopifyApiWrapper\Converters\Response
 */
class OrderResponseConverter extends ResponseConverter
{
    /**
     * @var FulfillmentResponseConverter
     */
    private $fulfillment_response_converter;

    /**
     * @var CustomerResponseConverter
     */
    private $customer_response_converter;

    /**
     * @var LineItemResponseConverter
     */
    private $line_item_response_converter;

    /**
     * @var OrderDiscountCodeResponseConverter
     */
    private $discount_code_converter;

    /**
     * @var OrderDiscountApplicationResponseConverter
     */
    private $discount_application_converter;

    /**
     * @var OrderNoteAttributeResponseConverter
     */
    private $note_attribute_converter;

    /**
     * @var CustomerAddressResponseConverter
     */
    private $address_converter;

    /**
     * @var OrderClientDetailsResponseConverter
     */
    private $client_details_converter;

    /**
     * @var ShippingLineResponseConverter
     */
    private $shipping_line_converter;

    /**
     * @var TaxLineResponseConverter
     */
    private $tax_line_converter;

    /**
     * OrderResponseConverter constructor.
     */
    public function __construct()
    {
        $this->fulfillment_response_converter = new FulfillmentResponseConverter;
        $this->customer_response_converter    = new CustomerResponseConverter;
        $this->line_item_response_converter   = new LineItemResponseConverter;
        $this->discount_code_converter        = new OrderDiscountCodeResponseConverter;
        $this->discount_application_converter = new OrderDiscountApplicationResponseConverter;
        $this->note_attribute_converter       = new OrderNoteAttributeResponseConverter;
        $this->address_converter              = new CustomerAddressResponseConverter;
        $this->tax_line_converter             = new TaxLineResponseConverter;
        $this->shipping_line_converter        = new ShippingLineResponseConverter;
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
        $order = new Order();
        $order->allowOverride();
        $order->number                  = $data->number ?? null;
        $order->order_number            = $data->order_number ?? null;
        $order->total_weight            = $data->total_weight ?? null;
        $order->subtotal_price          = $data->subtotal_price ?? null;
        $order->app_id                  = $data->app_id ?? null;
        $order->browser_ip              = $data->browser_ip ?? null;
        $order->cancel_reason           = $data->cancel_reason ?? null;
        $order->cancelled_at            = $data->cancelled_at ?? null;
        $order->cart_token              = $data->cart_token ?? null;
        $order->closed_at               = $data->closed_at ?? null;
        $order->created_at              = $data->created_at ?? null;
        $order->currency                = $data->currency ?? null;
        $order->customer_locale         = $data->customer_locale ?? null;
        $order->email                   = $data->email ?? null;
        $order->financial_status        = $data->financial_status ?? null;
        $order->fulfillment_status      = $data->fulfillment_status ?? null;
        $order->gateway                 = $data->gateway ?? null;
        $order->id                      = $data->id ?? null;
        $order->landing_site            = $data->landing_site ?? null;
        $order->location_id             = $data->location_id ?? null;
        $order->name                    = $data->name ?? null;
        $order->note                    = $data->note ?? null;
        $order->phone                   = $data->phone ?? null;
        $order->processed_at            = $data->processed_at ?? null;
        $order->processing_method       = $data->processing_method ?? null;
        $order->referring_site          = $data->referring_site ?? null;
        $order->source_name             = $data->source_name ?? null;
        $order->tags                    = $data->tags ?? null;
        $order->token                   = $data->token ?? null;
        $order->total_discounts         = $data->total_discounts ?? null;
        $order->total_line_items_price  = $data->total_line_items_price ?? null;
        $order->total_price             = $data->total_price ?? null;
        $order->total_tax               = $data->total_tax ?? null;
        $order->total_tip_received      = $data->total_tip_received ?? null;
        $order->updated_at              = $data->updated_at ?? null;
        $order->user_id                 = $data->user_id ?? null;
        $order->order_status_url        = $data->order_status_url ?? null;
        $order->payment_details         = $data->payment_details ?? [];
        $order->payment_gateway_names   = $data->payment_gateway_names ?? [];
        $order->refunds                 = $data->refunds ?? [];
        $order->buyer_accepts_marketing = $data->buyer_accepts_marketing ?? null;
        $order->tax_included            = $data->tax_included ?? null;

        // nested resources
        $order->shipping_address = ($data->shipping_address ?? false) ? $this->address_converter->process($data->shipping_address) : null;
        $order->billing_address  = ($data->billing_address ?? false) ? $this->address_converter->process($data->billing_address) : null;
        $order->customer         = ($data->customer ?? false) ? $this->customer_response_converter->process($data->customer) : null;
        $order->client_details   = ($data->client_details ?? false) ? $this->client_details_converter->process($data->client_details) : null;

        // nested resource arrays
        $order->discount_applications = $this->parseChildCollection($this->discount_application_converter, $data->discount_applications ?? []);
        $order->discount_codes        = $this->parseChildCollection($this->discount_code_converter, $data->discount_codes ?? []);
        $order->note_attributes       = $this->parseChildCollection($this->note_attribute_converter, $data->note_attributes ?? []);
        $order->fulfillments          = $this->parseChildCollection($this->fulfillment_response_converter, $data->fulfillments ?? []);
        $order->line_items            = $this->parseChildCollection($this->line_item_response_converter, $data->line_items ?? []);
        $order->shipping_lines        = $this->parseChildCollection($this->shipping_line_converter, $data->shipping_lines ?? []);
        $order->tax_lines             = $this->parseChildCollection($this->tax_line_converter, $data->tax_lines ?? []);

        return $order;
    }
}