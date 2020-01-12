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

            ['subcategory_id' => 83, 'ean' => '4710626110118', 'name' => '愛之味鮮味脆瓜180G_12', 'price' => 35, 'description' => "獨家採用香菇原汁、豆油原汁調味、香醇甘脆、湯汁既營養又開胃。\n以特選鮮嫩花瓜醃漬。以鉀鹽取代鈉鹽。\n可燉煮瓜仔雞，風味特佳。", 'specification' => "容量:180.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:720天\n商品來源:台灣\n重量:540.000 Kg", 'image_path' => 'images/products/2020-01-11/1.jpg'],
            ['subcategory_id' => 91, 'ean' => '4710943120098', 'name' => '日正鬆餅粉300G_12', 'price' => 68, 'description' => "人氣熱銷商品！美味下午茶，在家輕鬆做，鬆軟香甜，讓人一口接一口。", 'specification' => "容量:300.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:360天\n保存方式:避免放置陽光直射與潮濕處\n製造商/進口商名稱:日正食品工業股份有限公司\n商品來源台灣:重量300.000 Kg", 'image_path' => 'images/products/2020-01-11/2.jpg'],
            ['subcategory_id' => 91, 'ean' => '4710311107102', 'name' => '台糖-細砂1KG_20', 'price' => 40, 'description' => "HACCP認證\n糖度：99.7%以上\n從蔗糖中以天然結晶方式提取。含糖純度高，絕無添加物及雜質。", 'specification' => "容量:1 Kg公斤\n應免稅:應稅\n保存溫層:常溫\n保存期限:720天\n製造商/進口商名稱:台糖公司小港廠商品\n來源:台灣\n重量:2000 Kg", 'image_path' => 'images/products/2020-01-11/3.jpg'],
            ['subcategory_id' => 82, 'ean' => '4712048870137', 'name' => '豐年果糖500g_6', 'price' => 73, 'description' => "豐年果糖是好糖\n享受甜味更享受方便", 'specification' => "容量:500.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:720天\n保存方式:請放置陰涼乾燥處\n商品來源:台灣\n重量:500.000 g", 'image_path' => 'images/products/2020-01-11/4.jpg'],
            ['subcategory_id' => 95, 'ean' => '4710008312147', 'name' => '金味王醬油780ML_12', 'price' => 50, 'description' => "堅持180天純豆麥完釀醬油.絕不添加防腐劑\n全國唯一全室內密閉溫控發酵.衛生安全.品質穩定", 'specification' => "容量:780 ml毫升\n應免稅:應稅\n保存溫層:常溫\n保存期限:1080天\n保存方式:開瓶後請冷藏\n製造商/進口商名稱:味王股份有限公司商品\n來源:台灣\n重量:780 Kg", 'image_path' => 'images/products/2020-01-11/5.jpg'],
            ['subcategory_id' => 97, 'ean' => '4710046011101', 'name' => '工研大白醋600ML_12', 'price' => 49, 'description' => "天然、原味、不含人工色素及防腐劑\n玻璃瓶包裝風味佳", 'specification' => "容量:600 ml毫升\n應免稅:應稅\n保存溫層:常溫\n保存期限:1080天\n保存方式:請置放於陰涼處，避免陽光直射商品\n來源:台灣\n重量:600 Kg", 'image_path' => 'images/products/2020-01-11/6.jpg'],
            ['subcategory_id' => 99, 'ean' => '6924187820074', 'name' => '洽洽香瓜子225G_15', 'price' => 59, 'description' => "神祕配方-百煮入味香", 'specification' => "容量:225 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:240天\n保存方式:密閉放陰涼處\n商品來源:中國大陸\n重量:14400 Kg", 'image_path' => 'images/products/2020-01-11/7.jpg'],
            ['subcategory_id' => 103, 'ean' => '4710699500106', 'name' => '手摘果物芒果乾85G', 'price' => 33, 'description' => "芒果香味甘甜不膩順口好吃\n台灣生產高品質美味蜜餞\n散發著濃郁的酸甜香氣", 'specification' => "容量:70.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:360天\n商品來源:泰國\n重量:70.000 g", 'image_path' => 'images/products/2020-01-11/8.jpg'],
            ['subcategory_id' => 107, 'ean' => '4716022480213', 'name' => '橘平屋新摘海苔(原味)26g_20', 'price' => 109, 'description' => "採選天然海域鮮嫩海苔.多層匠心精緻烤.\n香醇甘美及酥脆咬感.對切的黃金比例尺寸.\n讓您唇齒留香.一口接一口.不吃不過癮", 'specification' => "容量:26 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:360天\n商品來源:台灣\n重量:26 Kg", 'image_path' => 'images/products/2020-01-11/9.jpg'],
            ['subcategory_id' => 113, 'ean' => '4710174113173', 'name' => 'Dr.Q蒟蒻(葡萄)265g_10', 'price' => 49, 'description' => "全新型態擠壓式口袋蒟蒻果凍\n原廠力挺~全新研發日本最流行的擠壓式袋型果凍!!", 'specification' => "容量:265 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:265 g", 'image_path' => 'images/products/2020-01-11/10.jpg'],
            ['subcategory_id' => 111, 'ean' => '4710745000123', 'name' => '福記鐵蛋-原味雞蛋7P鵪鶉24粒_20', 'price' => 99, 'description' => "獨家調配的秘方並運用獨特的滷製技術\n保有傳統獨特的風味與札實的口感\n適合當成下酒菜、茶點、休閒零食。", 'specification' => "容量:120.00 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:1年\n商品來源:台灣\n重量:120.000 Kg", 'image_path' => 'images/products/2020-01-11/11.jpg'],

            ['subcategory_id' => 118, 'ean' => '4710626110613', 'name' => '愛之味壺底蔭心140G_12', 'price' => 35, 'description' => "以傳統豆麴蔭製瓜胚，瓜胚熟爛且風味甘醇\n以長時間熬煮之蔭油調味，風味更佳無人可比\n可與肉類調味燉滷", 'specification' => "容量:140 g克\n保存溫層:常溫\n保存期限:720天\n商品來源:台灣\n重量:420 Kg\n", 'image_path' => 'images/products/2020-01-11/13.jpg'],
            ['subcategory_id' => 118, 'ean' => '4710626111313', 'name' => '愛之味珍保玉荀120G_12', 'price' => 35, 'description' => "精選新鮮嫩筍、甘香酸辣\n美味齊備，有益健康\n含豐富纖維", 'specification' => "容量:120 g克\n保存溫層:常溫\n保存期限:720天\n商品來源:台灣\n重量:360 Kg\n", 'image_path' => 'images/products/2020-01-11/12.jpg'],
            ['subcategory_id' => 118, 'ean' => '4710626210917', 'name' => '愛之味甜辣醬165G_12', 'price' => 35, 'description' => "粽子、餐桌佐料好伙伴\n甜甜辣辣，入口香醇，入喉甘醇", 'specification' => "容量:165.00 g克\n保存溫層:常溫\n保存期限:720天\n保存方式:勿放置在陽光直射與潮濕處\n商品來源:台灣\n重量:495.000 Kg", 'image_path' => 'images/products/2020-01-11/18.jpg'],
            ['subcategory_id' => 118, 'ean' => '4710199072097', 'name' => '維力炸醬 175G_12', 'price' => 80, 'description' => "維力獨家配方\n30年多年暢銷商品", 'specification' => "容量:175.00 g克\n保存溫層:常溫\n保存期限:720天\n製造商/進口商名稱:維力食品工業股份有限公司\n商品來源:台灣\n重量175.000 Kg", 'image_path' => 'images/products/2020-01-11/23.jpg'],
            ['subcategory_id' => 118, 'ean' => '4710323168672', 'name' => '大茂大土豆麵筋375G_12', 'price' => 30, 'description' => "大茂大土豆，好想吃一口\n素食者可食", 'specification' => "容量:375 g克\n保存溫層:常溫\n保存期限:1080天\n商品來源:台灣\n重量375 Kg", 'image_path' => 'images/products/2020-01-11/21.jpg'],

            ['subcategory_id' => 118, 'ean' => '4710943100328', 'name' => '日正寶島太白粉400G_12', 'price' => 39, 'description' => "吃的安心又健康\n精選素材嚴格把關", 'specification' => "容量:400.00 g克\n保存溫層:常溫\n保存期限:720天\n保存方式:請放置陰涼乾燥處\n商品來源:泰國\n重量400.000 g", 'image_path' => 'images/products/2020-01-11/25.jpg'],
            ['subcategory_id' => 118, 'ean' => '4710943100410', 'name' => '(小)中筋麵粉500G_12', 'price' => 39, 'description' => "日正完全不添加漂白劑、藥物煙燻劑，採用物理性高速離心蟲卵擊碎機，在過八道過篩網，做到確保品質安全。可讓消費者放心食用。", 'specification' => "容量:1.00 Kg公斤\n保存溫層:常溫\n保存期限:360天\n保存方式:常溫\n製造商/進口商名稱:日正食品工業股份有限公司\n商品來源:台灣\n重量:1080.000 Kg", 'image_path' => 'images/products/2020-01-11/26.jpg'],
            ['subcategory_id' => 118, 'ean' => '4710943100427', 'name' => '(小)低筋麵粉500G_12', 'price' => 39, 'description' => "日正完全不添加漂白劑、藥物煙燻劑，採用物理性高速離心蟲卵擊碎機，在過八道過篩網，做到確保品質安全。可讓消費者放心食用。", 'specification' => "容量:1.00 Kg公斤\n保存溫層:常溫\n保存期限:360天\n保存方式:常溫\n製造商/進口商名稱:日正食品工業股份有限公司\n商品來源:台灣\n重量:1000.000 Kg", 'image_path' => 'images/products/2020-01-11/27.jpg'],
            ['subcategory_id' => 118, 'ean' => '4710943100991', 'name' => '日正小蘇打粉280G_12', 'price' => 32, 'description' => "烘培西點的添加物，燙青菜時放入少許可使菜色鮮綠", 'specification' => "容量:25.00 g克 * 5\n保存溫層:常溫\n保存期限:360天\n保存方式:請放置陰涼乾燥處\n商品來源:台灣\n重量:25.000 g", 'image_path' => 'images/products/2020-01-11/28.jpg'],
            ['subcategory_id' => 118, 'ean' => '4711258710066', 'name' => '牛頭牌雞湯塊66G_12', 'price' => 25, 'description' => "嚴選上等原料製成\n堅持好品質是最佳的煮湯幫手\n含天然膳食纖維，維他命E\n經典原味，雞肉口味", 'specification' => "容量:11.00 g克 * 6\n保存溫層:常溫\n保存期限:720天\n保存方式:請置放於陰涼處  ※開封後請放冷藏\n商品來源:台灣\n重量:11.000 g", 'image_path' => 'images/products/2020-01-11/29.jpg'],

            ['subcategory_id' => 91, 'ean' => '4710311010112', 'name' => '台糖-特砂1KG_20', 'price' => 40, 'description' => "本產品係從甘蔗精煉而成,風味天然、滋甜香醇.\n糖度：99.7%以上。係原料糖經溶解去雜質及多次結晶煉製而成之高純度白糖。\n無添加化學物、是高品質的甜味料。\n適宜牛奶、咖啡、紅茶、冰品、飲料、蓮子、花茶、果汁等食品加工用糖及一般家庭用調味糖。", 'specification' => "容量:1.00 Kg公斤\n保存溫層:常溫\n保存期限:720天\n製造商/進口商名稱:台糖公司小港廠\n商品來源:台灣\n重量:1000.000 Kg", 'image_path' => 'images/products/2020-01-11/30.jpg'],
            ['subcategory_id' => 91, 'ean' => '4710311010211', 'name' => '台糖-貳砂1KG_20', 'price' => 40, 'description' => "本產品係從甘蔗精煉而成,風味天然、滋甜香醇.\n糖度： 98.3%以上。結晶而成之棕色砂糖。無添加化學物、含甘蔗蜜香氣，是風味極佳之結晶糖。\n適宜沖泡牛奶、咖啡、紅茶、冰品、蓮子、煮豆湯、白木耳、製餡、作年糕、西點、花茶、果汁等一般家庭用調味糖及食品加工用糖。", 'specification' => "容量:1.00 Kg公斤\n保存溫層:常溫\n保存期限:720天\n製造商/進口商名稱:台糖公司小港廠\n商品來源:台灣\n重量:7920.000 Kg", 'image_path' => 'images/products/2020-01-11/31.jpg'],
            ['subcategory_id' => 91, 'ean' => '4711456050032', 'name' => '維生頂級黑糖600G_24', 'price' => 60, 'description' => "本產品遵古法製造，不含色素及人工香料\n無雜質，唯一最天然純淨之調味食品\n黑糖主要原料來自甘蔗，內含大量礦物質，維生數等身體必需營養素", 'specification' => "淨重：600 公克\n有效日期：標示於包裝上\n保存期限：二年\n產地：台灣", 'image_path' => 'images/products/2020-01-11/32.jpg'],
            ['subcategory_id' => 91, 'ean' => '4710943100069', 'name' => '日正黑糖300G_24', 'price' => 39, 'description' => "精選優良素材，不添加人工香料", 'specification' => "容量:300.00 g克\n保存溫層:常溫\n保存期限:720天\n保存方式:請放置陰涼乾燥處\n商品來源:台灣\n重量:300.000g", 'image_path' => 'images/products/2020-01-11/33.jpg'],
            ['subcategory_id' => 91, 'ean' => '4713837007239', 'name' => '日曬海鹽(袋)450G_12', 'price' => 55, 'description' => "來自澳洲南極海域，無重金屬污染\n環保日曬法製鹽，保留海水中的微量元素\n不添加抗凝劑及不人工添加碘", 'specification' => "容量:450.00 g克\n保存溫層:常溫\n保存期限:1080天\n商品來源:澳大利亞\n重量:450.000g", 'image_path' => 'images/products/2020-01-11/34.jpg'],

            ['subcategory_id' => 82, 'ean' => '4710056123016', 'name' => '小自由果醬(草莓)240G_12', 'price' => 43, 'description' => "真空安全鈕蓋包裝，草莓顆粒保持天然水果的獨到風味", 'specification' => "容量:400.00 g克\n保存溫層:常溫\n商品來源:台灣\n重量:400.000 g", 'image_path' => 'images/products/2020-01-11/35.jpg'],
            ['subcategory_id' => 82, 'ean' => '4710056123054', 'name' => '小自由果醬(藍莓)240G_12', 'price' => 43, 'description' => "價格大眾化，品質優良，口感佳，品牌歷史悠久。", 'specification' => "容量:400.00 g克\n保存溫層:常溫\n商品來源:台灣\n重量:400.000 g", 'image_path' => 'images/products/2020-01-11/36.jpg'],
            ['subcategory_id' => 82, 'ean' => '80177425', 'name' => '能多益臻果可可醬180G_16', 'price' => 79, 'description' => "源自義大利,是風行歐美的第一品牌的抹醬\n香滑美味,由優質榛果製成\n50年來深受家庭歡迎,是早餐的好拍檔", 'specification' => "容量:180.00 g克\n保存溫層:常溫\n保存期限:1年\n保存方式:請放置陰涼乾燥處\n商品來源:波蘭", 'image_path' => 'images/products/2020-01-11/37.jpg'],
            ['subcategory_id' => 82, 'ean' => '6922877761027', 'name' => '康寶吉比柔滑花生醬(小)12OZ_12', 'price' => 149, 'description' => "無添加人工色素/防腐劑\n吉比花生醬為台灣消費者心目中「最受消費者喜愛的花生醬品牌」\n最具知名度的花生醬\n最被推薦的花生醬\n最受喜愛的花生醬", 'specification' => "容量:462.00 g克\n保存溫層:常溫\n保存期限:360天\n保存方式:請放置於陰涼乾燥處\n商品來源:美國\n重量:462.000 g", 'image_path' => 'images/products/2020-01-11/38.jpg'],
            ['subcategory_id' => 82, 'ean' => '6922877762017', 'name' => '康寶吉比顆粒花生醬(小)12OZ_12', 'price' => 149, 'description' => "無添加人工色素/防腐劑\n吉比花生醬為台灣消費者心目中「最受消費者喜愛的花生醬品牌」\n最具知名度的花生醬\n最被推薦的花生醬\n最受喜愛的花生醬", 'specification' => "容量:462.00 g克\n保存溫層:常溫\n保存期限:540天\n保存方式:請放置於陰涼乾燥處\n商品來源:美國\n重量:462.000 g", 'image_path' => 'images/products/2020-01-11/39.jpg'],

            ['subcategory_id' => 95, 'ean' => '74261041232', 'name' => '萬家香大吟釀醬油1000ML_12', 'price' => 79, 'description' => "非基因改造黃豆 100%純天然釀造,不添加防腐劑\n萬家香用「大吟釀」等級的技術規格推出的醬油，嚴選豆麥原料，經過長時間釀造發酵，味道鮮醇香馥、濃郁美味。", 'specification' => "容量:1000.00 ml毫升\n保存溫層:常溫\n保存期限:1080天\n保存方式:請置於陰涼乾燥處.避免陽光直射\n商品來源:台灣\n重量:1000.000 Kg", 'image_path' => 'images/products/2020-01-11/40.jpg'],
            ['subcategory_id' => 95, 'ean' => '74261030700', 'name' => '萬家香大吟釀薄鹽醬油300ML', 'price' => 45, 'description' => "運用「大吟釀」等級的技術與設備，歷經數月釀造熟成，並減少15%用鹽進行發酵擺脫過去傳統醬油死鹹的印象，少了鹽份多了健康\n，口感純淨甘醇，用於簡單的蔬食料理，更能襯托食材的風味。", 'specification' => "容量:300.00 ml毫升\n保存溫層:常溫\n保存期限:1080天\n商品來源:台灣\n重量:300.000 g", 'image_path' => 'images/products/2020-01-11/41.jpg'],
            ['subcategory_id' => 95, 'ean' => '4710043023022', 'name' => '得意的一天五珍寶調合油1.58L_6', 'price' => 149, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 95, 'ean' => '4710043023190', 'name' => '得意的一天不飽合葵花油1.58L_6', 'price' => 149, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 95, 'ean' => '4710043032727', 'name' => '得意的一天純芥花油1.58L_6', 'price' => 149, 'description' => "", 'specification' => "", 'image_path' => ''],

            ['subcategory_id' => 97, 'ean' => '74261150453', 'name' => '萬家香味醂450ML_12', 'price' => 57, 'description' => "100%純天然釀造，不含防腐劑\n60年發酵技術嚴格品管\n使用米醋天然發酵，素食者可用\n可去腥增鮮，取代糖與味精", 'specification' => "容量:450.00 ml毫升\n保存溫層:常溫\n保存期限:1080天\n保存方式:請放置陰涼通風處,開封後請冷藏\n商品來源:台灣\n重量:450.000 g", 'image_path' => 'images/products/2020-01-11/42.jpg'],
            ['subcategory_id' => 97, 'ean' => '74261175074', 'name' => '萬家香珍釀白醋200ML_12', 'price' => 28, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 97, 'ean' => '74261191074', 'name' => '萬家香特級烏醋200ML_12', 'price' => 28, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 97, 'ean' => '4710943107020', 'name' => '日正胡麻油240ml_12', 'price' => 129, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 97, 'ean' => '4710943250924', 'name' => '日正(中)特級香油295ML_12', 'price' => 89, 'description' => "", 'specification' => "", 'image_path' => ''],

            ['subcategory_id' => 99, 'ean' => '4712893946995', 'name' => '日日旺烤核桃-蜂蜜108g_12', 'price' => 99, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 99, 'ean' => '4712893947008', 'name' => '日日旺烤核桃-五香味108g_12', 'price' => 99, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 99, 'ean' => '4712893947015', 'name' => '日日旺烤核桃-奶油味108g_12', 'price' => 99, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 99, 'ean' => '4711161741515', 'name' => 'SSY台灣特產-綜合蔬菜90G(袋)_12', 'price' => 39, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 99, 'ean' => '4711161741522', 'name' => 'SSY台灣特產-菠蘿蜜90G(袋)_12', 'price' => 39, 'description' => "", 'specification' => "", 'image_path' => ''],

            ['subcategory_id' => 103, 'ean' => '4714221810800', 'name' => '延壽堂八仙果罐160G_20', 'price' => 79, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 103, 'ean' => '4712978980036', 'name' => '果實御品檸檬片150g_1', 'price' => 129, 'description' => "", 'specification' => "容量:150.00 g克\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:150.000 g", 'image_path' => 'images/products/2020-01-11/43.jpg'],
            ['subcategory_id' => 103, 'ean' => '4712978980074', 'name' => '果實御品鳳梨乾125g_1', 'price' => 129, 'description' => "", 'specification' => "容量:125.00 g克\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:125.000 g", 'image_path' => 'images/products/2020-01-11/44.jpg'],
            ['subcategory_id' => 103, 'ean' => '4712978980128', 'name' => '果實御品仙楂+c片350g_1', 'price' => 129, 'description' => "", 'specification' => "容量:350.00 g克\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:350.000 g", 'image_path' => 'images/products/2020-01-11/45.jpg'],
            ['subcategory_id' => 103, 'ean' => '471297898081', 'name' => '果食御品草莓乾100g_1', 'price' => 129, 'description' => "", 'specification' => "容量:100.00 g克\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:100.000 g", 'image_path' => 'images/products/2020-01-11/46.jpg'],

            ['subcategory_id' => 107, 'ean' => '4710022002628', 'name' => '元本山對切海苔(原味)_20', 'price' => 99, 'description' => "精選天然海域生長的海苔，經過獨特烘烤技術，搭配芥末醬油調味，微嗆芥末更襯托出海苔的精甜！對半裁切的特大尺寸，讓你大口咬下酥脆又過癮，受怎麼吃就怎麼吃！", 'specification' => "容量:31.20 g克\n保存溫層:常溫\n保存期限:360天\n保存方式:為確保產品品質，產品請存放於陰涼乾燥處。\n製造商/進口商名稱:聯華食品工業股份有限公司\n商品來源:台灣\n重量:31.200 Kg", 'image_path' => 'images/products/2020-01-11/47.jpg'],
            ['subcategory_id' => 107, 'ean' => '4710022002642', 'name' => '元本山對切海苔(辣味)_20', 'price' => 99, 'description' => "嚴選高級海苔烘焙製成\n獨特香辣醬油調味\n入口辣味層次分明,令人ㄧ口接一口", 'specification' => "容量:34.00 g克\n保存溫層:常溫\n保存期限:360天\n保存方式:為確保產品品質，產品請存放於陰涼乾燥處。\n製造商/進口商名稱:聯華食品工業股份有限公司\n商品來源:台灣\n重量:34.000 Kg", 'image_path' => 'images/products/2020-01-11/48.jpg'],
            ['subcategory_id' => 107, 'ean' => '4716022480534', 'name' => '橘平屋岩燒海苔(原)4.2g*3_6', 'price' => 43, 'description' => "", 'specification' => "容量:4.00 g克 * 3\n保存溫層:常溫\n保存期限:330天\n商品來源:台灣\n重量:4.000 g", 'image_path' => 'images/products/2020-01-11/49.jpg'],
            ['subcategory_id' => 107, 'ean' => '8858702401364', 'name' => 'KONOMI相撲手脆紫菜-原味', 'price' => 59, 'description' => "全素：適合所有消費者享用\n越吃越停不下來一片接著一片", 'specification' => "容量:36.00 g克\n保存溫層:常溫\n保存期限:450天\n保存方式:請放在陰涼乾爽處，避免日光照射\n商品來源:泰國\n重量:36.000 g", 'image_path' => 'images/products/2020-01-11/50.jpg'],
            ['subcategory_id' => 107, 'ean' => '8858702401364', 'name' => 'KONOMI相撲手脆紫菜-辣味', 'price' => 59, 'description' => "全素：適合所有消費者享用\n越吃越停不下來一片接著一片", 'specification' => "容量:36.00 g克\n保存溫層:常溫\n保存期限:450天\n保存方式:請放在陰涼乾爽處，避免日光照射\n商品來源:泰國\n重量:36.000 g", 'image_path' => 'images/products/2020-01-11/51.jpg'],

            ['subcategory_id' => 113, 'ean' => '4714431050881', 'name' => 'HELLO BETTY蒟蒻條400G_12', 'price' => 45, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 113, 'ean' => '4710174113180', 'name' => 'Dr.Q蒟蒻(芒果)265g_10', 'price' => 49, 'description' => "全新研發超夯果凍商品!\n全新食感,擠壓式口袋型果凍", 'specification' => "容量:265 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:265 g", 'image_path' => 'images/products/2020-01-11/52.jpg'],
            ['subcategory_id' => 113, 'ean' => '4710174113197', 'name' => 'Dr.Q蒟蒻(荔枝)265g_10', 'price' => 49, 'description' => "全新研發超夯果凍商品!\n全新食感,擠壓式口袋型果凍", 'specification' => "容量:265 g克\n應免稅:應稅\n保存溫層:常溫\n保存期限:12個月\n商品來源:台灣\n重量:265 g", 'image_path' => 'images/products/2020-01-11/53.jpg'],
            ['subcategory_id' => 113, 'ean' => '4710298060353', 'name' => '晶晶荔枝椰果400G_10', 'price' => 45, 'description' => "香甜荔枝口味搭配椰果果粒\n果凍Q軟絕妙口感\n好吃不膩越吃越順口", 'specification' => "容量:400.00 g克\n保存溫層:常溫\n保存期限:360天\n保存方式:請放置陰涼乾燥處\n商品來源:台灣\n重量:400.000 g", 'image_path' => 'images/products/2020-01-11/55.jpg'],
            ['subcategory_id' => 113, 'ean' => '4710298020647', 'name' => '晶晶果凍條470G_10', 'price' => 45, 'description' => "果凍Q軟絕妙口感，綜合果汁口味滋味豐富\n晶晶果凍系列，健康營養可口美味，大人小孩都喜歡！", 'specification' => "容量:470.00 g克\n保存溫層:常溫\n保存期限:360天\n保存方式:避免存放於高溫或陽光直射\n商品來源:台灣\n重量:470.000 Kg", 'image_path' => 'images/products/2020-01-11/54.jpg'],

            ['subcategory_id' => 111, 'ean' => '4710772020019', 'name' => '黃日香素食豆干130G_30', 'price' => 45, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 111, 'ean' => '4710772020095', 'name' => '黃日香沙茶豆干130G_30', 'price' => 45, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 111, 'ean' => '4715082127014', 'name' => '太珍香-黑胡椒豆干120g', 'price' => 35, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 111, 'ean' => '4715082128011', 'name' => '太珍香-滷肉豆干120g', 'price' => 35, 'description' => "", 'specification' => "", 'image_path' => ''],
            ['subcategory_id' => 111, 'ean' => '4711671180026', 'name' => '高坑辣味牛肉乾180g_10', 'price' => 199, 'description' => "", 'specification' => "", 'image_path' => '']
        ];

        DB::table('products')->truncate();

        foreach ($items as $item) {
            \App\Product::create($item);
        }
    }
}
