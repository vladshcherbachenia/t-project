<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::factory(500)->create()->each(function (Order $order) {
            OrderItem::factory(rand(1,5))->create([
                'order_id' => $order->id
            ]);
        });
    }
}
