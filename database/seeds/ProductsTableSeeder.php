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
            ['subcategory_id' => 90, 'ean' => '9556437005848', 'name' => '可康芒果布丁(大杯) 420G_12', 'price' => 332, 'description' => '可康芒果布丁(大杯) 420G_12', 'specification' => "產地:中國\n溫度:低溫", 'image_path' => 'images/products/2019-12-02/9556437005848.png'],
            ['subcategory_id' => 83, 'ean' => '4710626110118', 'name' => '愛之味鮮味脆瓜180G_12', 'price' => 35, 'description' => '獨家採用香菇原汁、豆油原汁調味、香醇甘脆、湯汁既營養又開胃。\n以特選鮮嫩花瓜醃漬。以鉀鹽取代鈉鹽。\n可燉煮瓜仔雞，風味特佳。', 'specification' => "容量:180.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:720天\n商品來源:台灣\n重量:540.000 Kg", 'image_path' => 'images/products/2020-01-11/1.jpeg'],
            ['subcategory_id' => 91, 'ean' => '4710943120098', 'name' => '日正鬆餅粉300G_12', 'price' => 68, 'description' => '人氣熱銷商品！美味下午茶，在家輕鬆做，鬆軟香甜，讓人一口接一口。', 'specification' => "容量:300.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:360天\n保存方式:避免放置陽光直射與潮濕處\n製造商/進口商名稱:日正食品工業股份有限公司\n商品來源台灣:重量300.000 Kg", 'image_path' => 'images/products/2020-01-11/2.jpeg'],
            ['subcategory_id' => 91, 'ean' => '4710311107102', 'name' => '台糖-細砂1KG_20', 'price' => 40, 'description' => 'HACCP認證\n糖度：99.7%以上\n從蔗糖中以天然結晶方式提取。含糖純度高，絕無添加物及雜質。', 'specification' => "容量:1 Kg公斤\n應免稅:應稅\n保存溫層:常溫\n保存期限:720天\n製造商/進口商名稱:台糖公司小港廠商品\n來源:台灣\n重量:2000 Kg", 'image_path' => 'images/products/2020-01-11/3.jpeg'],
            ['subcategory_id' => 82, 'ean' => '4712048870137', 'name' => '豐年果糖500g_6', 'price' => 73, 'description' => '豐年果糖是好糖\n享受甜味更享受方便', 'specification' => "容量:500.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:720天\n保存方式:請放置陰涼乾燥處\n商品來源:台灣\n重量:500.000 g", 'image_path' => 'images/products/2020-01-11/4.jpeg'],
            ['subcategory_id' => 95, 'ean' => '4710008312147', 'name' => '金味王醬油780ML_12', 'price' => 50, 'description' => '堅持180天純豆麥完釀醬油.絕不添加防腐劑\n全國唯一全室內密閉溫控發酵.衛生安全.品質穩定', 'specification' => "容量:780 ml毫升\n應免稅:應稅\n保存溫層:常溫\n保存期限:1080天\n保存方式:開瓶後請冷藏\n製造商/進口商名稱:味王股份有限公司商品\n來源:台灣\n重量:780 Kg", 'image_path' => 'images/products/2020-01-11/5.jpeg'],
            ['subcategory_id' => 97, 'ean' => '4710046011101', 'name' => '工研大白醋600ML_12', 'price' => 49, 'description' => '天然、原味、不含人工色素及防腐劑\n玻璃瓶包裝風味佳', 'specification' => "容量:600 ml毫升\n應免稅:應稅\n保存溫層:常溫\n保存期限:1080天\n保存方式:請置放於陰涼處，避免陽光直射商品\n來源:台灣\n重量:600 Kg", 'image_path' => 'images/products/2020-01-11/6.jpeg'],
            ['subcategory_id' => 99, 'ean' => '6924187820074', 'name' => '洽洽香瓜子225G_15', 'price' => 59, 'description' => '神祕配方-百煮入味香', 'specification' => "容量:225 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:240天\n保存方式:密閉放陰涼處\n商品來源:中國大陸\n重量:14400 Kg", 'image_path' => 'images/products/2020-01-11/7.jpeg'],
            ['subcategory_id' => 103, 'ean' => '4710699500106', 'name' => '手摘果物芒果乾85G', 'price' => 33, 'description' => '芒果香味甘甜不膩順口好吃\n台灣生產高品質美味蜜餞\n散發著濃郁的酸甜香氣', 'specification' => "容量:70.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:360天\n商品來源:泰國\n重量:70.000 g", 'image_path' => 'images/products/2020-01-11/8.jpeg'],
            ['subcategory_id' => 107, 'ean' => '4716022480213', 'name' => '橘平屋新摘海苔(原味)26g_20', 'price' => 109, 'description' => '採選天然海域鮮嫩海苔.多層匠心精緻烤.\n香醇甘美及酥脆咬感.對切的黃金比例尺寸.\n讓您唇齒留香.一口接一口.不吃不過癮', 'specification' => "容量:26 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:360天\n商品來源:台灣\n重量:26 Kg", 'image_path' => 'images/products/2020-01-11/9.jpeg'],
            ['subcategory_id' => 113, 'ean' => '4710174113173', 'name' => 'Dr.Q蒟蒻(葡萄)265g_10', 'price' => 49, 'description' => '全新型態擠壓式口袋蒟蒻果凍\n原廠力挺~全新研發日本最流行的擠壓式袋型果凍!!', 'specification' => "容量:265 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:265 g", 'image_path' => 'images/products/2020-01-11/10.jpeg'],
            ['subcategory_id' => 111, 'ean' => '4710745000123', 'name' => '福記鐵蛋-原味雞蛋7P鵪鶉24粒_20', 'price' => 99, 'description' => '獨家調配的秘方並運用獨特的滷製技術\n保有傳統獨特的風味與札實的口感\n適合當成下酒菜、茶點、休閒零食。', 'specification' => "容量:120.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:1年\n商品來源:台灣\n重量:120.000 Kg", 'image_path' => 'images/products/2020-01-11/11.jpeg'],
        ];

        DB::table('products')->truncate();

        foreach ($items as $item) {
            \App\Product::create($item);
        }
    }
}
