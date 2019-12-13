<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['user_id' => 1],
        ];

        DB::table('orders')->truncate();

        foreach ($items as $item) {
            \App\Order::create($item);
        }

        $items = [
            ['order_id' => 1, 'product_id' => 1, 'amount' => 10],
            ['order_id' => 1, 'product_id' => 2, 'amount' => 10],
            ['order_id' => 1, 'product_id' => 3, 'amount' => 10],
        ];

        DB::table('order_products')->truncate();

        foreach ($items as $item) {
            \App\OrderProduct::create($item);
        }
    }
}
