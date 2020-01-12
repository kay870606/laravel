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
            ['user_id' => 1, 'created_at' => '2019-11-15 8:55:43', 'updated_at' => '2019-11-15 8:55:43'],
            ['user_id' => 1, 'created_at' => '2019-12-22 14:37:15', 'updated_at' => '2019-12-22 14:37:15'],
            ['user_id' => 1, 'created_at' => '2020-01-12 17:26:49', 'updated_at' => '2020-01-12 17:26:49'],
        ];

        DB::table('orders')->truncate();

        foreach ($items as $item) {
            \App\Order::create($item);
        }

        $items = [
            ['order_id' => 1, 'product_id' => 1, 'amount' => 1],
            ['order_id' => 1, 'product_id' => 2, 'amount' => 1],
            ['order_id' => 1, 'product_id' => 3, 'amount' => 1],
            ['order_id' => 1, 'product_id' => 4, 'amount' => 1],
            ['order_id' => 1, 'product_id' => 5, 'amount' => 1],

            ['order_id' => 2, 'product_id' => 6, 'amount' => 1],
            ['order_id' => 2, 'product_id' => 7, 'amount' => 1],
            ['order_id' => 2, 'product_id' => 8, 'amount' => 1],
            ['order_id' => 2, 'product_id' => 9, 'amount' => 1],

            ['order_id' => 3, 'product_id' => 10, 'amount' => 1],
            ['order_id' => 3, 'product_id' => 11, 'amount' => 1],
            ['order_id' => 3, 'product_id' => 12, 'amount' => 1],
            ['order_id' => 3, 'product_id' => 13, 'amount' => 1],
            ['order_id' => 3, 'product_id' => 14, 'amount' => 1],
            ['order_id' => 3, 'product_id' => 15, 'amount' => 1],
        ];

        DB::table('order_products')->truncate();

        foreach ($items as $item) {
            \App\OrderProduct::create($item);
        }
    }
}
