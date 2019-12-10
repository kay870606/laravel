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
            ['subcategory_id' => 90, 'ean' => '4710043018547', 'name' => '雞精', 'price' => 332, 'description' => '好吃的雞精', 'specification' => '好吃的雞精', 'image_path' => 'products/2019-12-02/1.png'],
            ['subcategory_id' => 90, 'ean' => '4710088412553', 'name' => '統一科學麵MINI包家庭號_10', 'price' => 166, 'description' => '統一科學麵MINI包家庭號_10', 'specification' => '統一科學麵MINI包家庭號_10', 'image_path' => 'products/2019-12-02/2.png'],
            ['subcategory_id' => 90, 'ean' => '7622210708519', 'name' => 'oreo餅乾', 'price' => 159, 'description' => 'oreo餅乾', 'specification' => 'oreo餅乾', 'image_path' => 'products/2019-12-02/3.png'],
            ['subcategory_id' => 90, 'ean' => '490161621571', 'name' => '三詩達DO波浪型潔淨牙刷-軟性', 'price' => 100, 'description' => '三詩達DO波浪型潔淨牙刷', 'specification' => '三詩達DO波浪型潔淨牙刷', 'image_path' => 'products/2019-12-02/4.png'],
            ['subcategory_id' => 90, 'ean' => '4710043023183', 'name' => '得意的一天青春三元素1.58L_6', 'price' => 150, 'description' => '得意的一天青春三元素1.58L_6', 'specification' => '得意的一天青春三元素1.58L_6', 'image_path' => 'products/2019-12-02/5.png'],
            ['subcategory_id' => 90, 'ean' => '4710043023435', 'name' => '桂格大燕麥片-水果58.5G*5(盒)', 'price' => 160, 'description' => '桂格大燕麥片-水果58.5G*5(盒)', 'specification' => '桂格大燕麥片-水果58.5G*5(盒)', 'image_path' => 'products/2019-12-02/6.png'],
        ];

        DB::table('products')->truncate();

        foreach ($items as $item) {
            \App\Product::create($item);
        }
    }
}
