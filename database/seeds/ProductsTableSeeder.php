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
            ['subcategory_id' => 90, 'ean' => '4710043018547', 'name' => '雞精', 'price' => 332, 'description' => '好吃的雞精', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/1.png'],
            ['subcategory_id' => 90, 'ean' => '4710088412553', 'name' => '統一科學麵MINI包家庭號_10', 'price' => 166, 'description' => '統一科學麵MINI包家庭號_10', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/2.png'],
            ['subcategory_id' => 90, 'ean' => '7622210708519', 'name' => 'oreo餅乾', 'price' => 159, 'description' => 'oreo餅乾', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/3.png'],
            ['subcategory_id' => 90, 'ean' => '490161621571', 'name' => '三詩達DO波浪型潔淨牙刷-軟性', 'price' => 100, 'description' => '三詩達DO波浪型潔淨牙刷', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4.png'],
            ['subcategory_id' => 90, 'ean' => '4710043023183', 'name' => '得意的一天青春三元素1.58L_6', 'price' => 150, 'description' => '得意的一天青春三元素1.58L_6', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/5.png'],
            ['subcategory_id' => 90, 'ean' => '4710043023435', 'name' => '桂格大燕麥片-水果58.5G*5(盒)', 'price' => 160, 'description' => '桂格大燕麥片-水果58.5G*5(盒)', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/6.png'],
            ['subcategory_id' => 90, 'ean' => '02000010127', 'name' => '綠巨人玉米醬418G(14.75OZ)_24', 'price' => 332, 'description' => '綠巨人玉米醬418G(14.75OZ)_24', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/02000010127.png'],
            ['subcategory_id' => 90, 'ean' => '4710347903426', 'name' => '貼身小品綿褲5入女XL', 'price' => 332, 'description' => '貼身小品綿褲5入女XL', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4710347903426.png'],
            ['subcategory_id' => 90, 'ean' => '4710704730504', 'name' => '20CC點眼瓶(3入) K-0504', 'price' => 332, 'description' => '20CC點眼瓶(3入) K-0504', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4710704730504.png'],
            ['subcategory_id' => 90, 'ean' => '4710844921206', 'name' => '速必效新螞蟻餌劑-A(5入+2針+30ml)', 'price' => 332, 'description' => '速必效新螞蟻餌劑-A(5入+2針+30ml)', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4710844921206.png'],
            ['subcategory_id' => 90, 'ean' => '4710852001020', 'name' => '嘉禾大土豆-蒜味220G_20', 'price' => 332, 'description' => '嘉禾大土豆-蒜味220G_20', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4710852001020.png'],
            ['subcategory_id' => 90, 'ean' => '4710852703061', 'name' => '薄荷糖 220G(包)_24', 'price' => 332, 'description' => '薄荷糖 220G(包)_24', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4710852703061.png'],
            ['subcategory_id' => 90, 'ean' => '4710901893187', 'name' => '優活抽取式衛生紙100抽24包_4', 'price' => 332, 'description' => '優活抽取式衛生紙100抽24包_4', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4710901893187.png'],
            ['subcategory_id' => 90, 'ean' => '4711462000014', 'name' => '紅人A1牛排醬100oz_24', 'price' => 332, 'description' => '紅人A1牛排醬100oz_24', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4711462000014.png'],
            ['subcategory_id' => 90, 'ean' => '4711467735287', 'name' => '生活大師 衣之戀輕衣架 8入', 'price' => 332, 'description' => '生活大師 衣之戀輕衣架 8入', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4711467735287.png'],
            ['subcategory_id' => 90, 'ean' => '4711863611956', 'name' => '樂品果凍GEL腳後踵墊', 'price' => 332, 'description' => '樂品果凍GEL腳後踵墊', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4711863611956.png'],
            ['subcategory_id' => 90, 'ean' => '4712755792524', 'name' => '自然原素芒果乾140G', 'price' => 332, 'description' => '自然原素芒果乾140G', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4712755792524.png'],
            ['subcategory_id' => 90, 'ean' => '4712977460676', 'name' => '蛋黃哥可愛眼罩-3款', 'price' => 332, 'description' => '蛋黃哥可愛眼罩-3款', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4712977460676.png'],
            ['subcategory_id' => 90, 'ean' => '4713198176018', 'name' => 'KEYTOSS自然素材無螢光飄浮內衣洗衣網PL601', 'price' => 332, 'description' => 'KEYTOSS自然素材無螢光飄浮內衣洗衣網PL601', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4713198176018.png'],
            ['subcategory_id' => 90, 'ean' => '4713398110102', 'name' => '馬玉山黑芝麻糊30G*12包_12', 'price' => 332, 'description' => '馬玉山黑芝麻糊30G*12包_12', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4713398110102.png'],
            ['subcategory_id' => 90, 'ean' => '4715222001990', 'name' => 'H.B膚色低過敏透氣紙膠0.5吋', 'price' => 332, 'description' => 'H.B膚色低過敏透氣紙膠0.5吋', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4715222001990.png'],
            ['subcategory_id' => 90, 'ean' => '4716073818461', 'name' => 'Comefree可捲式居家健康步道踏墊', 'price' => 332, 'description' => 'Comefree可捲式居家健康步道踏墊', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4716073818461.png'],
            ['subcategory_id' => 90, 'ean' => '4902402376874', 'name' => '佛蒙特3號辣味咖哩230G_10', 'price' => 332, 'description' => '佛蒙特3號辣味咖哩230G_10', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4902402376874.png'],
            ['subcategory_id' => 90, 'ean' => '4902750627222', 'name' => '味覺酷露露Q糖(白葡萄)40G_6', 'price' => 332, 'description' => '味覺酷露露Q糖(白葡萄)40G_6', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4902750627222.png'],
            ['subcategory_id' => 90, 'ean' => '4903111351749', 'name' => '蘇菲超熟睡極緻柔貼 37CM10片', 'price' => 332, 'description' => '蘇菲超熟睡極緻柔貼 37CM10片', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/4903111351749.png'],
            ['subcategory_id' => 90, 'ean' => '6922877761027', 'name' => '康寶吉比柔滑花生醬(小)12OZ_12', 'price' => 332, 'description' => '康寶吉比柔滑花生醬(小)12OZ_12', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/6922877761027.png'],
            ['subcategory_id' => 90, 'ean' => '8000500133170', 'name' => '金莎精緻禮盒(8顆)100g_6', 'price' => 332, 'description' => '金莎精緻禮盒(8顆)100g_6', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/8000500133170.png'],
            ['subcategory_id' => 90, 'ean' => '8801062009527', 'name' => 'LOTTE青葡萄糖153g_20', 'price' => 332, 'description' => 'LOTTE青葡萄糖153g_20', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/8801062009527.png'],
            ['subcategory_id' => 90, 'ean' => '8850163100107', 'name' => '杜蕾斯超薄裝衛生套12入裝_6', 'price' => 332, 'description' => '杜蕾斯超薄裝衛生套12入裝_6', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/8850163100107.png'],
            ['subcategory_id' => 90, 'ean' => '9556437005848', 'name' => '可康芒果布丁(大杯) 420G_12', 'price' => 332, 'description' => '可康芒果布丁(大杯) 420G_12', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/9556437005848.png']
        ];

        DB::table('products')->truncate();

        foreach ($items as $item) {
            \App\Product::create($item);
        }
    }
}
