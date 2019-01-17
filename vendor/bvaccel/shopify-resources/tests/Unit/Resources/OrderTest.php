<?php


namespace Tests\Unit\Resources;


use BVAccel\ShopifyResources\Resources\Customer;
use BVAccel\ShopifyResources\Resources\CustomerAddress;
use BVAccel\ShopifyResources\Resources\Order;
use BVAccel\ShopifyResources\Resources\OrderNoteAttribute;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /** @test */
    public function cannot_set_invalid_enum()
    {
        $order = new Order();

        try {
            $order->cancel_reason = 'bad-enum';
        } catch (\Exception $e) {
            $exception = $e;
        }

        $this->assertNotNull($exception ?? null);
        $this->assertNotEquals('bad-enum', $order->cancel_reason);
    }

    /** @test */
    public function can_do_something()
    {
        $orders = [];

        for ($i = 0; $i < 1000; $i++) {
            $order = new Order();

            $order->customer = new Customer([
                'email'           => 'test@example.com',
                'first_name'      => 'Test',
                'last_name'       => 'Er',
                'default_address' => new CustomerAddress([

                ]),
            ]);

            $order->email              = 'test@exampl.com';
            $order->financial_status   = 'paid';
            $order->fulfillment_status = 'fulfilled';

            $order->note_attributes = [
                new OrderNoteAttribute(['name' => 'note1', 'value' => 'note']),
                new OrderNoteAttribute(['name' => 'note2', 'value' => 'note']),
            ];


            $orders[] = $order;

        }

        $this->assertEquals(1000, sizeof($orders));
    }
}