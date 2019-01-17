<?php


namespace BVAccel\ShopifyApiWrapper\Requests;

use BVAccel\ShopifyApiWrapper\Parameters\TransactionParameters;
use BVAccel\ShopifyApiWrapper\Responses\MultipleTransactionResponse;
use BVAccel\ShopifyApiWrapper\Responses\SingleTransactionResponse;

/**
 * Class OrderTransactionRequest
 * @package BVAccel\ShopifyApiWrapper\Requests
 */
class OrderTransactionRequest extends ShopifyRequest
{
    /**
     * @param $order_id
     * @param TransactionParameters|null $parameters
     * @return MultipleTransactionResponse
     */
    public function all($order_id, ?TransactionParameters $parameters = null)
    {
        return new MultipleTransactionResponse(
            $this->client->get("orders/$order_id/transactions.json", $parameters ? $parameters->getParameters() : [])
        );
    }

    /**
     * @param $order_id
     * @param $transaction_id
     * @return SingleTransactionResponse
     */
    public function find($order_id, $transaction_id)
    {
        return new SingleTransactionResponse($this->client->get("orders/$order_id/transactions/$transaction_id.json"));
    }
}