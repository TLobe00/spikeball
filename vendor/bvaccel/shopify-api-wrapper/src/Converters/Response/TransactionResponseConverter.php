<?php


namespace BVAccel\ShopifyApiWrapper\Converters\Response;


use BVAccel\ShopifyResources\Resources\OrderTransaction;
use BVAccel\ShopifyResources\Resources\ShopifyResource;

class TransactionResponseConverter extends ResponseConverter
{
    /**
     * Parse
     *
     * Convert JSON object to ShopifyResource
     *
     * @param \stdClass $data
     * @return ShopifyResource|OrderTransaction
     */
    protected function process(\stdClass $data): ShopifyResource
    {
        $transaction = new OrderTransaction();
        $transaction->allowOverride();
        $transaction->amount          = $data->amount ?? null;
        $transaction->authorization   = $data->authorization ?? null;
        $transaction->created_at      = $data->created_at ?? null;
        $transaction->currency        = $data->currency ?? null;
        $transaction->device_id       = $data->device_id ?? null;
        $transaction->error_code      = $data->error_code ?? null;
        $transaction->gateway         = $data->gateway ?? null;
        $transaction->id              = $data->id ?? null;
        $transaction->kind            = $data->kind ?? null;
        $transaction->message         = $data->message ?? null;
        $transaction->order_id        = $data->order_id ?? null;
        $transaction->payment_details = $data->payment_details ?? [];
        $transaction->parent_id       = $data->parent_id ?? null;
        $transaction->receipt         = $data->receipt ?? [];
        $transaction->source_name     = $data->source_name ?? null;
        $transaction->status          = $data->status ?? null;
        $transaction->test            = $data->test ?? null;
        $transaction->user_id         = $data->user_id ?? null;

        return $transaction;
    }
}