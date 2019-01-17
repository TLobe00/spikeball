<?php

namespace BVAccel\ShopifyResources\Resources;

use BVAccel\ShopifyResources\Resources\Properties\BasicArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\BasicProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceArrayProperty;
use BVAccel\ShopifyResources\Resources\Properties\NestedResourceProperty;
use BVAccel\ShopifyResources\Resources\Properties\ResourcePropertiesContainer;
use BVAccel\ShopifyResources\Resources\OrderClientDetails;

/**
 * Class Order
 *
 * @package BVAccel\ShopifyResources\Resources
 * @property int                        $number
 * @property int                        $order_number
 * @property int                        $total_weight
 * @property double                     $subtotal_price
 * @property string                     $app_id
 * @property string                     $browser_ip
 * @property string                     $cancel_reason
 * @property string                     $cancelled_at
 * @property string                     $cart_token
 * @property string                     $closed_at
 * @property string                     $created_at
 * @property string                     $currency
 * @property string                     $customer_locale
 * @property string                     $email
 * @property string                     $financial_status
 * @property string                     $fulfillment_status
 * @property string                     $gateway
 * @property string                     $id
 * @property string                     $landing_site
 * @property string                     $location_id
 * @property string                     $name
 * @property string                     $note
 * @property string                     $phone
 * @property string                     $processed_at
 * @property string                     $processing_method
 * @property string                     $referring_site
 * @property string                     $source_name
 * @property string                     $tags
 * @property string                     $token
 * @property string                     $total_discounts
 * @property string                     $total_line_items_price
 * @property string                     $total_price
 * @property string                     $total_tax
 * @property string                     $total_tip_received
 * @property string                     $updated_at
 * @property string                     $user_id
 * @property string                     $order_status_url
 * @property array                      $billing_address
 * @property array                      $client_details
 * @property Customer                   $customer
 * @property OrderDiscountApplication[] $discount_applications
 * @property OrderDiscountCode[]        $discount_codes
 * @property Fulfillment[]              $fulfillments
 * @property LineItem[]                 $line_items
 * @property OrderNoteAttribute[]       $note_attributes
 * @property ShippingLine[]             $shipping_lines
 * @property PaymentDetails             $payment_details
 * @property TaxLine[]                  $tax_lines
 * @property Refund[]                   $refunds
 * @property array                      $payment_gateway_names
 * @property array                      $shipping_address
 * @property bool                       $buyer_accepts_marketing
 * @property bool                       $tax_included
 */
class Order extends ShopifyResource
{
    /**
     * Define Resource Properties
     *
     * @return ResourcePropertiesContainer
     * @throws \Exception
     */
    protected function buildPropertiesContainer(): ResourcePropertiesContainer
    {
        return new ResourcePropertiesContainer('Order', [

            // ID
            (new BasicProperty('id', ['string']))->readOnly(),

            // Read-only
            (new BasicProperty('app_id', ['string']))->readOnly(),
            (new BasicProperty('browser_ip', ['string']))->readOnly(),
            (new BasicProperty('cancelled_at', ['string']))->readOnly(),
            (new BasicProperty('cart_token', ['string']))->readOnly(),
            (new BasicProperty('closed_at', ['string']))->readOnly(),
            (new BasicProperty('created_at', ['string']))->readOnly(),
            (new BasicProperty('customer_locale', ['string']))->readOnly(),
            (new BasicProperty('landing_site', ['string']))->readOnly(),
            (new BasicProperty('number', ['integer', 'string']))->readOnly(),
            (new BasicProperty('order_number', ['integer', 'string']))->readOnly(),
            (new BasicProperty('order_status_url', ['string']))->readOnly(),
            (new BasicProperty('updated_at', ['string']))->readOnly(),

            // Read-only array
            (new BasicArrayProperty('payment_gateway_names', ['string']))->readOnly(),

            // Enum settable properties
            (new BasicProperty('cancel_reason', ['string']))
                ->enum(['customer', 'fraud', 'inventory', 'decline', 'other']),
            (new BasicProperty('financial_status', ['string']))
                ->enum(['pending', 'authorize', 'partially_paid', 'paid', 'partially_refunded', 'refunded', 'voided']),
            (new BasicProperty('fulfillment_status', ['string']))
                ->enum(['fulfilled', null, 'null', 'partial', 'restocked']),

            // Regular settable properties
            new BasicProperty('buyer_accepts_marketing', ['boolean']),
            new BasicProperty('subtotal_price', ['double', 'string']),
            new BasicProperty('currency', ['string']),
            new BasicProperty('email', ['string']),
            new BasicProperty('gateway', ['string']),
            new BasicProperty('location_id', ['string']),
            new BasicProperty('name', ['string']),
            new BasicProperty('note', ['string']),
            new BasicProperty('phone', ['string']),
            new BasicProperty('processed_at', ['string']),
            new BasicProperty('processing_method', ['string']),
            new BasicProperty('referring_site', ['string']),
            new BasicProperty('source_name', ['string']),
            new BasicArrayProperty('tags', ['string']),
            new BasicProperty('tax_included', ['boolean']),
            new BasicProperty('token', ['string']),
            new BasicProperty('total_weight', ['integer', 'string']),
            new BasicProperty('total_discounts', ['string']),
            new BasicProperty('total_line_items_price', ['string']),
            new BasicProperty('total_price', ['string']),
            new BasicProperty('total_tax', ['string']),
            new BasicProperty('total_tip_received', ['string']),
            new BasicProperty('user_id', ['string']),

            // nested resources
            (new NestedResourceProperty('client_details', [OrderClientDetails::class]))->readOnly(),
            (new NestedResourceProperty('payment_details', [PaymentDetails::class]))->readOnly(),
            (new NestedResourceArrayProperty('refunds', [Refund::class]))->readOnly(),
            new NestedResourceArrayProperty('discount_codes', [OrderDiscountCode::class]),
            new NestedResourceArrayProperty('line_items', [LineItem::class]),
            new NestedResourceArrayProperty('fulfillments', [Fulfillment::class]),
            new NestedResourceProperty('billing_address', [CustomerAddress::class]),
            new NestedResourceProperty('shipping_address', [CustomerAddress::class]),
            new NestedResourceArrayProperty('discount_applications', [OrderDiscountApplication::class]),
            new NestedResourceArrayProperty('note_attributes', [OrderNoteAttribute::class]),
            new NestedResourceProperty('customer', [Customer::class]),
            new NestedResourceArrayProperty('shipping_lines', [ShippingLine::class]),
            new NestedResourceArrayProperty('tax_lines', [TaxLine::class]),
        ]);
    }
}