<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['subcategory_id' => 90, 'ean' => '4710043018547','name'=>'雞精','price'=>332,'description'=>'好吃的雞精','specification'=>'好吃的雞精','image_path'=>'products/2019-12-02/1.png'],
        ];

        DB::table('products')->truncate();

        foreach ($items as $item) {
            \App\Product::create($item);
        }
    }
}
