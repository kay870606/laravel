<?php

use Illuminate\Database\Seeder;

class CustomizedCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 16,
                'number' => 316,
                'name' => '乾果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 17,
                'number' => 317,
                'name' => '蜜餞',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 18,
                'number' => 318,
                'name' => '海苔',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 19,
                'number' => 319,
                'name' => '肉乾/豆干/果凍',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 20,
                'number' => 320,
                'name' => '海鮮',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 21,
                'number' => 321,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 22,
                'number' => 322,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 23,
                'number' => 323,
                'name' => '麵食',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 24,
                'number' => 324,
                'name' => '體重計',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 25,
                'number' => 325,
                'name' => '免洗褲/居家護理',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 26,
                'number' => 326,
                'name' => '鞋墊',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 27,
                'number' => 327,
                'name' => '牙刷',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 28,
                'number' => 328,
                'name' => '牙間刷',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 29,
                'number' => 329,
                'name' => '牙線/牙籤/棉花棒',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 30,
                'number' => 330,
                'name' => '香氛袋',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 31,
                'number' => 331,
                'name' => '液體/芳香劑',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 32,
                'number' => 332,
                'name' => '殺蟲劑/驅蟲劑',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 33,
                'number' => 333,
                'name' => '防潮除濕/清潔用品',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 34,
                'number' => 334,
                'name' => '柔軟精',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 35,
                'number' => 335,
                'name' => '洗衣粉',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 36,
                'number' => 336,
                'name' => '洗衣精',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 37,
                'number' => 337,
                'name' => '洗潔精/洗碗精',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 38,
                'number' => 338,
                'name' => '玻璃/廚浴',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 39,
                'number' => 339,
                'name' => '曬衣用品',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 40,
                'number' => 340,
                'name' => '曬衣用品/洗衣用品',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 41,
                'number' => 341,
                'name' => '洗衣袋',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 42,
                'number' => 342,
                'name' => '收納防塵/小型收納',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 43,
                'number' => 343,
                'name' => '---垃圾袋---',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-11 15:14:28',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 85,
                'number' => 385,
                'name' => 'PVC系列',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:01:01',
                'deleted_at' => '2020-01-12 17:01:01',
            ),
            29 => 
            array (
                'id' => 14,
                'number' => 314,
                'name' => '果醬/調味/調理包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 13:38:18',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 15,
                'number' => 315,
                'name' => '罐頭/醬料',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 13:50:01',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1,
                'number' => 301,
                'name' => '巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:28',
                'deleted_at' => '2020-01-12 16:23:28',
            ),
            32 => 
            array (
                'id' => 2,
                'number' => 302,
                'name' => '糖果/口香糖',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            33 => 
            array (
                'id' => 3,
                'number' => 303,
                'name' => '糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            34 => 
            array (
                'id' => 4,
                'number' => 304,
                'name' => '進口餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            35 => 
            array (
                'id' => 5,
                'number' => 305,
                'name' => '進口餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            36 => 
            array (
                'id' => 6,
                'number' => 306,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            37 => 
            array (
                'id' => 7,
                'number' => 307,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            38 => 
            array (
                'id' => 8,
                'number' => 308,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            39 => 
            array (
                'id' => 9,
                'number' => 309,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            40 => 
            array (
                'id' => 10,
                'number' => 310,
                'name' => '茶/穀物/保健食品',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            41 => 
            array (
                'id' => 11,
                'number' => 311,
                'name' => '即溶/調和/研磨咖啡',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            42 => 
            array (
                'id' => 12,
                'number' => 312,
                'name' => '果醬/奶粉',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            43 => 
            array (
                'id' => 13,
                'number' => 313,
                'name' => '果汁/乳品/酒',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:37:12',
                'deleted_at' => '2020-01-12 16:37:12',
            ),
            44 => 
            array (
                'id' => 88,
                'number' => 388,
                'name' => '旅遊配件',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:00:45',
                'deleted_at' => '2020-01-12 17:00:45',
            ),
            45 => 
            array (
                'id' => 87,
                'number' => 387,
                'name' => '皮夾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:00:51',
                'deleted_at' => '2020-01-12 17:00:51',
            ),
            46 => 
            array (
                'id' => 86,
                'number' => 386,
                'name' => '零錢包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:00:56',
                'deleted_at' => '2020-01-12 17:00:56',
            ),
            47 => 
            array (
                'id' => 84,
                'number' => 384,
                'name' => '淑女包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:01:06',
                'deleted_at' => '2020-01-12 17:01:06',
            ),
            48 => 
            array (
                'id' => 83,
                'number' => 383,
                'name' => '淑女包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:01:27',
                'deleted_at' => '2020-01-12 17:01:27',
            ),
            49 => 
            array (
                'id' => 82,
                'number' => 382,
                'name' => '中性包/公事包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:01:33',
                'deleted_at' => '2020-01-12 17:01:33',
            ),
            50 => 
            array (
                'id' => 81,
                'number' => 381,
                'name' => '中性包/公事包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:28',
                'deleted_at' => '2020-01-12 17:18:28',
            ),
            51 => 
            array (
                'id' => 80,
                'number' => 380,
                'name' => '腰包/萬用包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:33',
                'deleted_at' => '2020-01-12 17:18:33',
            ),
            52 => 
            array (
                'id' => 79,
                'number' => 379,
                'name' => '後背包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:37',
                'deleted_at' => '2020-01-12 17:18:37',
            ),
            53 => 
            array (
                'id' => 78,
                'number' => 378,
                'name' => '後背包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:41',
                'deleted_at' => '2020-01-12 17:18:41',
            ),
            54 => 
            array (
                'id' => 77,
                'number' => 377,
                'name' => '後背包',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:45',
                'deleted_at' => '2020-01-12 17:18:45',
            ),
            55 => 
            array (
                'id' => 76,
                'number' => 376,
                'name' => '地墊',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:50',
                'deleted_at' => '2020-01-12 17:18:50',
            ),
            56 => 
            array (
                'id' => 75,
                'number' => 375,
                'name' => '坐墊',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:54',
                'deleted_at' => '2020-01-12 17:18:54',
            ),
            57 => 
            array (
                'id' => 74,
                'number' => 374,
                'name' => '頸枕 寢具',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:18:58',
                'deleted_at' => '2020-01-12 17:18:58',
            ),
            58 => 
            array (
                'id' => 73,
                'number' => 373,
                'name' => '室外拖鞋',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:01',
                'deleted_at' => '2020-01-12 17:19:01',
            ),
            59 => 
            array (
                'id' => 72,
                'number' => 372,
                'name' => '室外拖鞋',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:05',
                'deleted_at' => '2020-01-12 17:19:05',
            ),
            60 => 
            array (
                'id' => 71,
                'number' => 371,
                'name' => '室內拖鞋',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:10',
                'deleted_at' => '2020-01-12 17:19:10',
            ),
            61 => 
            array (
                'id' => 70,
                'number' => 370,
                'name' => '室內拖鞋',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:14',
                'deleted_at' => '2020-01-12 17:19:14',
            ),
            62 => 
            array (
                'id' => 69,
                'number' => 369,
                'name' => '毛巾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:19',
                'deleted_at' => '2020-01-12 17:19:19',
            ),
            63 => 
            array (
                'id' => 68,
                'number' => 368,
                'name' => '童巾方巾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:22',
                'deleted_at' => '2020-01-12 17:19:22',
            ),
            64 => 
            array (
                'id' => 67,
                'number' => 367,
                'name' => '浴巾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:26',
                'deleted_at' => '2020-01-12 17:19:26',
            ),
            65 => 
            array (
                'id' => 66,
                'number' => 366,
                'name' => '吹風機 燈泡',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:29',
                'deleted_at' => '2020-01-12 17:19:29',
            ),
            66 => 
            array (
                'id' => 65,
                'number' => 365,
                'name' => '電烤箱',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:33',
                'deleted_at' => '2020-01-12 17:19:33',
            ),
            67 => 
            array (
                'id' => 64,
                'number' => 364,
                'name' => '電子鍋',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:37',
                'deleted_at' => '2020-01-12 17:19:37',
            ),
            68 => 
            array (
                'id' => 63,
                'number' => 363,
                'name' => '通訊電話/檯燈',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:40',
                'deleted_at' => '2020-01-12 17:19:40',
            ),
            69 => 
            array (
                'id' => 62,
                'number' => 362,
                'name' => '掛勾類 DIY工具',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:43',
                'deleted_at' => '2020-01-12 17:19:43',
            ),
            70 => 
            array (
                'id' => 61,
                'number' => 361,
                'name' => '浴帽 洗澡巾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:46',
                'deleted_at' => '2020-01-12 17:19:46',
            ),
            71 => 
            array (
                'id' => 60,
                'number' => 360,
                'name' => '面盆水杓',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:50',
                'deleted_at' => '2020-01-12 17:19:50',
            ),
            72 => 
            array (
                'id' => 59,
                'number' => 359,
                'name' => '衛生棉/條 衛生護墊',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:53',
                'deleted_at' => '2020-01-12 17:19:53',
            ),
            73 => 
            array (
                'id' => 58,
                'number' => 358,
                'name' => '衛生棉/條 衛生護墊',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:19:58',
                'deleted_at' => '2020-01-12 17:19:58',
            ),
            74 => 
            array (
                'id' => 57,
                'number' => 357,
                'name' => '濕紙巾 衛生棉/條',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:01',
                'deleted_at' => '2020-01-12 17:20:01',
            ),
            75 => 
            array (
                'id' => 56,
                'number' => 356,
                'name' => '進口小百貨',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:04',
                'deleted_at' => '2020-01-12 17:20:04',
            ),
            76 => 
            array (
                'id' => 55,
                'number' => 355,
                'name' => '進口小百貨',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:07',
                'deleted_at' => '2020-01-12 17:20:07',
            ),
            77 => 
            array (
                'id' => 54,
                'number' => 354,
                'name' => '進口小百貨',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:11',
                'deleted_at' => '2020-01-12 17:20:11',
            ),
            78 => 
            array (
                'id' => 53,
                'number' => 353,
                'name' => '隨身水壺/冷水壺',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:15',
                'deleted_at' => '2020-01-12 17:20:15',
            ),
            79 => 
            array (
                'id' => 52,
                'number' => 352,
                'name' => '水杯/免洗餐具',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:19',
                'deleted_at' => '2020-01-12 17:20:19',
            ),
            80 => 
            array (
                'id' => 51,
                'number' => 351,
                'name' => '保鮮膜/砧板',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:22',
                'deleted_at' => '2020-01-12 17:20:22',
            ),
            81 => 
            array (
                'id' => 50,
                'number' => 350,
                'name' => '保鮮盒/塵封罐',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:25',
                'deleted_at' => '2020-01-12 17:20:25',
            ),
            82 => 
            array (
                'id' => 49,
                'number' => 349,
                'name' => '調理五金用具',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:28',
                'deleted_at' => '2020-01-12 17:20:28',
            ),
            83 => 
            array (
                'id' => 48,
                'number' => 348,
                'name' => '玻璃/瓷器/滴水籃',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:31',
                'deleted_at' => '2020-01-12 17:20:31',
            ),
            84 => 
            array (
                'id' => 47,
                'number' => 347,
                'name' => '保溫瓶/便當盒',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:35',
                'deleted_at' => '2020-01-12 17:20:35',
            ),
            85 => 
            array (
                'id' => 46,
                'number' => 346,
                'name' => '飯碗/各式鍋類',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:38',
                'deleted_at' => '2020-01-12 17:20:38',
            ),
            86 => 
            array (
                'id' => 45,
                'number' => 345,
                'name' => '菜瓜布/抹布',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:41',
                'deleted_at' => '2020-01-12 17:20:41',
            ),
            87 => 
            array (
                'id' => 44,
                'number' => 344,
                'name' => '塑膠手套',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 17:20:44',
                'deleted_at' => '2020-01-12 17:20:44',
            ),
        ));
        
        
    }
}