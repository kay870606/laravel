<?php

use Illuminate\Database\Seeder;

class CustomizedSubcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subcategories')->delete();
        
        \DB::table('subcategories')->insert(array (
            0 => 
            array (
                'id' => 92,
                'category_id' => 14,
                'order' => 2,
                'name' => '調理粉',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 98,
                'category_id' => 15,
                'order' => 4,
                'name' => '醬料',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 99,
                'category_id' => 16,
                'order' => 1,
                'name' => '乾果',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 100,
                'category_id' => 16,
                'order' => 2,
                'name' => '乾果',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 101,
                'category_id' => 16,
                'order' => 3,
                'name' => '乾果',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 93,
                'category_id' => 14,
                'order' => 3,
                'name' => '調理包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 13:41:59',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 97,
                'category_id' => 15,
                'order' => 3,
                'name' => '油品',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 13:51:19',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 95,
                'category_id' => 15,
                'order' => 1,
                'name' => '罐頭',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 13:51:40',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 96,
                'category_id' => 15,
                'order' => 2,
                'name' => '罐頭',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 13:51:44',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'order' => 1,
                'name' => '糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:28',
                'deleted_at' => '2020-01-12 16:23:28',
            ),
            10 => 
            array (
                'id' => 4,
                'category_id' => 2,
                'order' => 1,
                'name' => '口香糖',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            11 => 
            array (
                'id' => 5,
                'category_id' => 2,
                'order' => 2,
                'name' => '喉糖',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            12 => 
            array (
                'id' => 6,
                'category_id' => 2,
                'order' => 3,
                'name' => '糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            13 => 
            array (
                'id' => 11,
                'category_id' => 3,
                'order' => 1,
                'name' => '進口巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            14 => 
            array (
                'id' => 12,
                'category_id' => 3,
                'order' => 2,
                'name' => '進口巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            15 => 
            array (
                'id' => 13,
                'category_id' => 3,
                'order' => 3,
                'name' => '進口巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            16 => 
            array (
                'id' => 14,
                'category_id' => 3,
                'order' => 4,
                'name' => '進口巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            17 => 
            array (
                'id' => 15,
                'category_id' => 3,
                'order' => 5,
                'name' => '國產巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 4,
                'order' => 1,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 4,
                'order' => 2,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 4,
                'order' => 3,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 4,
                'order' => 4,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 4,
                'order' => 5,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            23 => 
            array (
                'id' => 24,
                'category_id' => 4,
                'order' => 6,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            24 => 
            array (
                'id' => 25,
                'category_id' => 4,
                'order' => 7,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            25 => 
            array (
                'id' => 27,
                'category_id' => 5,
                'order' => 1,
            'name' => '洋芋片(條)',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            26 => 
            array (
                'id' => 28,
                'category_id' => 5,
                'order' => 2,
            'name' => '洋芋片(條)',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            27 => 
            array (
                'id' => 29,
                'category_id' => 5,
                'order' => 3,
            'name' => '洋芋片(條)',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            28 => 
            array (
                'id' => 30,
                'category_id' => 5,
                'order' => 4,
            'name' => '洋芋片(條)',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            29 => 
            array (
                'id' => 31,
                'category_id' => 5,
                'order' => 5,
                'name' => '東南亞餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            30 => 
            array (
                'id' => 32,
                'category_id' => 5,
                'order' => 6,
                'name' => '東南亞餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            31 => 
            array (
                'id' => 33,
                'category_id' => 5,
                'order' => 7,
                'name' => '東南亞餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            32 => 
            array (
                'id' => 35,
                'category_id' => 6,
                'order' => 1,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            33 => 
            array (
                'id' => 36,
                'category_id' => 6,
                'order' => 2,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            34 => 
            array (
                'id' => 37,
                'category_id' => 6,
                'order' => 3,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            35 => 
            array (
                'id' => 38,
                'category_id' => 6,
                'order' => 4,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            36 => 
            array (
                'id' => 39,
                'category_id' => 6,
                'order' => 5,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            37 => 
            array (
                'id' => 40,
                'category_id' => 6,
                'order' => 6,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            38 => 
            array (
                'id' => 41,
                'category_id' => 6,
                'order' => 7,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            39 => 
            array (
                'id' => 43,
                'category_id' => 7,
                'order' => 1,
                'name' => '嬰幼餅',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            40 => 
            array (
                'id' => 44,
                'category_id' => 7,
                'order' => 2,
                'name' => '嬰幼餅',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            41 => 
            array (
                'id' => 45,
                'category_id' => 7,
                'order' => 3,
                'name' => '米果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            42 => 
            array (
                'id' => 46,
                'category_id' => 7,
                'order' => 4,
                'name' => '米果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            43 => 
            array (
                'id' => 47,
                'category_id' => 7,
                'order' => 5,
                'name' => '點心麵',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            44 => 
            array (
                'id' => 48,
                'category_id' => 7,
                'order' => 6,
                'name' => '點心麵',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            45 => 
            array (
                'id' => 49,
                'category_id' => 7,
                'order' => 7,
            'name' => '蛋糕(派)',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            46 => 
            array (
                'id' => 50,
                'category_id' => 7,
                'order' => 8,
            'name' => '蛋糕(派)',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:42',
                'deleted_at' => '2020-01-12 16:23:42',
            ),
            47 => 
            array (
                'id' => 51,
                'category_id' => 8,
                'order' => 1,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            48 => 
            array (
                'id' => 52,
                'category_id' => 8,
                'order' => 2,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            49 => 
            array (
                'id' => 53,
                'category_id' => 8,
                'order' => 3,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            50 => 
            array (
                'id' => 54,
                'category_id' => 8,
                'order' => 4,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            51 => 
            array (
                'id' => 55,
                'category_id' => 8,
                'order' => 5,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            52 => 
            array (
                'id' => 56,
                'category_id' => 8,
                'order' => 6,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            53 => 
            array (
                'id' => 59,
                'category_id' => 9,
                'order' => 1,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            54 => 
            array (
                'id' => 60,
                'category_id' => 9,
                'order' => 2,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            55 => 
            array (
                'id' => 61,
                'category_id' => 9,
                'order' => 3,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            56 => 
            array (
                'id' => 62,
                'category_id' => 9,
                'order' => 4,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            57 => 
            array (
                'id' => 63,
                'category_id' => 9,
                'order' => 5,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            58 => 
            array (
                'id' => 64,
                'category_id' => 9,
                'order' => 6,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            59 => 
            array (
                'id' => 65,
                'category_id' => 9,
                'order' => 7,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            60 => 
            array (
                'id' => 67,
                'category_id' => 10,
                'order' => 1,
                'name' => '茶包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            61 => 
            array (
                'id' => 68,
                'category_id' => 10,
                'order' => 2,
                'name' => '茶包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            62 => 
            array (
                'id' => 69,
                'category_id' => 10,
                'order' => 3,
                'name' => '茶包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            63 => 
            array (
                'id' => 70,
                'category_id' => 10,
                'order' => 4,
                'name' => '養生穀物',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            64 => 
            array (
                'id' => 71,
                'category_id' => 10,
                'order' => 5,
                'name' => '養生穀物',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            65 => 
            array (
                'id' => 72,
                'category_id' => 10,
                'order' => 6,
                'name' => '養生穀物',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            66 => 
            array (
                'id' => 73,
                'category_id' => 10,
                'order' => 7,
                'name' => '保健食品',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            67 => 
            array (
                'id' => 75,
                'category_id' => 11,
                'order' => 1,
                'name' => '研磨咖啡',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            68 => 
            array (
                'id' => 76,
                'category_id' => 11,
                'order' => 2,
                'name' => '即溶咖啡',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            69 => 
            array (
                'id' => 77,
                'category_id' => 11,
                'order' => 3,
                'name' => '即溶咖啡',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            70 => 
            array (
                'id' => 78,
                'category_id' => 11,
                'order' => 4,
                'name' => '調和咖啡',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            71 => 
            array (
                'id' => 79,
                'category_id' => 11,
                'order' => 5,
                'name' => '調和咖啡',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            72 => 
            array (
                'id' => 80,
                'category_id' => 11,
                'order' => 6,
                'name' => '調和咖啡',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            73 => 
            array (
                'id' => 81,
                'category_id' => 11,
                'order' => 7,
                'name' => '奶茶',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:24:23',
                'deleted_at' => '2020-01-12 16:24:23',
            ),
            74 => 
            array (
                'id' => 82,
                'category_id' => 12,
                'order' => 1,
                'name' => '果醬',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            75 => 
            array (
                'id' => 83,
                'category_id' => 12,
                'order' => 2,
                'name' => '甜品',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            76 => 
            array (
                'id' => 84,
                'category_id' => 12,
                'order' => 3,
                'name' => '麥片',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            77 => 
            array (
                'id' => 85,
                'category_id' => 12,
                'order' => 4,
                'name' => '麥片',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            78 => 
            array (
                'id' => 86,
                'category_id' => 12,
                'order' => 5,
                'name' => '麥片',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            79 => 
            array (
                'id' => 87,
                'category_id' => 12,
                'order' => 6,
                'name' => '奶粉',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            80 => 
            array (
                'id' => 90,
                'category_id' => 13,
                'order' => 1,
                'name' => '乳品/果汁/機能飲品',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:12',
                'deleted_at' => '2020-01-12 16:37:12',
            ),
            81 => 
            array (
                'id' => 102,
                'category_id' => 16,
                'order' => 4,
                'name' => '乾果',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 103,
                'category_id' => 17,
                'order' => 1,
                'name' => '蜜餞',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 104,
                'category_id' => 17,
                'order' => 2,
                'name' => '蜜餞',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 105,
                'category_id' => 17,
                'order' => 3,
                'name' => '蜜餞',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 106,
                'category_id' => 17,
                'order' => 4,
                'name' => '蜜餞',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 107,
                'category_id' => 18,
                'order' => 1,
                'name' => '海苔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 108,
                'category_id' => 18,
                'order' => 2,
                'name' => '海苔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 109,
                'category_id' => 18,
                'order' => 3,
                'name' => '海苔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 110,
                'category_id' => 18,
                'order' => 4,
                'name' => '海苔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 111,
                'category_id' => 19,
                'order' => 1,
                'name' => '豆干',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 112,
                'category_id' => 19,
                'order' => 2,
                'name' => '豆干',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 113,
                'category_id' => 19,
                'order' => 3,
                'name' => '果凍蒟蒻',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 114,
                'category_id' => 20,
                'order' => 1,
                'name' => '海鮮零嘴',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 115,
                'category_id' => 20,
                'order' => 2,
                'name' => '海鮮零嘴',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 116,
                'category_id' => 20,
                'order' => 3,
                'name' => '海鮮零嘴',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 117,
                'category_id' => 20,
                'order' => 4,
                'name' => '海鮮零嘴',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 126,
                'category_id' => 23,
                'order' => 1,
                'name' => '調理麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 127,
                'category_id' => 23,
                'order' => 2,
                'name' => '調理麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 128,
                'category_id' => 23,
                'order' => 3,
                'name' => '調理麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 129,
                'category_id' => 23,
                'order' => 4,
                'name' => '調理麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 130,
                'category_id' => 24,
                'order' => 1,
                'name' => '保險套',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 131,
                'category_id' => 24,
                'order' => 2,
                'name' => '暖暖包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 132,
                'category_id' => 24,
                'order' => 3,
                'name' => '瑜珈器材',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 133,
                'category_id' => 24,
                'order' => 4,
                'name' => '按摩舒壓',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 134,
                'category_id' => 25,
                'order' => 1,
                'name' => '免洗褲',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 135,
                'category_id' => 25,
                'order' => 2,
                'name' => '清涼製劑',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 136,
                'category_id' => 25,
                'order' => 3,
                'name' => '包扎用品',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 137,
                'category_id' => 26,
                'order' => 1,
                'name' => '鞋墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 138,
                'category_id' => 26,
                'order' => 2,
                'name' => '鞋墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 139,
                'category_id' => 26,
                'order' => 3,
                'name' => '眼罩',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 140,
                'category_id' => 26,
                'order' => 4,
                'name' => '隱形眼鏡配件',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 141,
                'category_id' => 27,
                'order' => 1,
                'name' => '牙間刷',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 142,
                'category_id' => 27,
                'order' => 2,
                'name' => '成人用牙刷',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 143,
                'category_id' => 27,
                'order' => 3,
                'name' => '成人用牙刷',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 144,
                'category_id' => 27,
                'order' => 4,
                'name' => '成人用牙刷',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 145,
                'category_id' => 28,
                'order' => 1,
                'name' => '兒童牙膏',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 146,
                'category_id' => 28,
                'order' => 2,
                'name' => '一般牙膏',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 147,
                'category_id' => 28,
                'order' => 3,
                'name' => '功能性牙膏',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 148,
                'category_id' => 28,
                'order' => 4,
                'name' => '漱口水',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 149,
                'category_id' => 29,
                'order' => 1,
                'name' => '潔牙線',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 150,
                'category_id' => 29,
                'order' => 2,
                'name' => '盒裝牙線棒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 151,
                'category_id' => 29,
                'order' => 3,
                'name' => '牙籤',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 152,
                'category_id' => 29,
                'order' => 4,
                'name' => '紙軸棉花棒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 153,
                'category_id' => 30,
                'order' => 1,
                'name' => '香氛袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 154,
                'category_id' => 30,
                'order' => 2,
                'name' => '香氛袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 155,
                'category_id' => 30,
                'order' => 3,
                'name' => '芳香貼',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 156,
                'category_id' => 30,
                'order' => 4,
                'name' => '除蟲片',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 157,
                'category_id' => 31,
                'order' => 1,
                'name' => '消臭晶球',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 158,
                'category_id' => 31,
                'order' => 2,
                'name' => '竹山芳香',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 159,
                'category_id' => 31,
                'order' => 3,
                'name' => '衣物清新噴霧',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 160,
                'category_id' => 32,
                'order' => 1,
                'name' => '噴霧殺蟲劑',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 161,
                'category_id' => 32,
                'order' => 2,
                'name' => '防蚊液',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 162,
                'category_id' => 32,
                'order' => 3,
                'name' => '螞蟻餌劑',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 163,
                'category_id' => 32,
                'order' => 4,
                'name' => '防蚊液',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 164,
                'category_id' => 33,
                'order' => 1,
                'name' => '除濕桶/盒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 165,
                'category_id' => 33,
                'order' => 2,
                'name' => '乾燥劑',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 166,
                'category_id' => 33,
                'order' => 3,
                'name' => '乾濕除塵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 167,
                'category_id' => 33,
                'order' => 4,
                'name' => '膠黏拖把',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 168,
                'category_id' => 34,
                'order' => 1,
                'name' => '衣領去漬',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 169,
                'category_id' => 34,
                'order' => 2,
                'name' => '漂白',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 170,
                'category_id' => 34,
                'order' => 3,
                'name' => '柔軟精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 171,
                'category_id' => 34,
                'order' => 4,
                'name' => '柔軟精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 172,
                'category_id' => 35,
                'order' => 1,
                'name' => '洗衣精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 173,
                'category_id' => 35,
                'order' => 2,
                'name' => '洗衣精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 174,
                'category_id' => 35,
                'order' => 3,
                'name' => '一般洗衣粉',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 175,
                'category_id' => 35,
                'order' => 4,
                'name' => '洗衣槽去汙劑',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 176,
                'category_id' => 36,
                'order' => 1,
                'name' => '洗衣精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 177,
                'category_id' => 36,
                'order' => 2,
                'name' => '洗衣精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 178,
                'category_id' => 36,
                'order' => 3,
                'name' => '洗衣精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 179,
                'category_id' => 36,
                'order' => 4,
                'name' => '洗衣精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 180,
                'category_id' => 37,
                'order' => 1,
                'name' => '洗碗精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 181,
                'category_id' => 37,
                'order' => 2,
                'name' => '洗碗精',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 182,
                'category_id' => 37,
                'order' => 3,
                'name' => '地板清潔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 183,
                'category_id' => 37,
                'order' => 4,
                'name' => '蘇打粉',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 184,
                'category_id' => 38,
                'order' => 1,
                'name' => '廚房清潔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 185,
                'category_id' => 38,
                'order' => 2,
                'name' => '浴室清潔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 186,
                'category_id' => 38,
                'order' => 3,
                'name' => '水管',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 187,
                'category_id' => 38,
                'order' => 4,
                'name' => '馬桶疏通劑',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 188,
                'category_id' => 39,
                'order' => 1,
                'name' => '塑膠衣架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 189,
                'category_id' => 39,
                'order' => 2,
                'name' => '塑膠衣架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 190,
                'category_id' => 39,
                'order' => 3,
                'name' => '塑膠衣架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 191,
                'category_id' => 39,
                'order' => 4,
                'name' => '鐵線衣架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 192,
                'category_id' => 40,
                'order' => 1,
                'name' => '洗衣刷',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 193,
                'category_id' => 40,
                'order' => 2,
                'name' => '造型曬架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 194,
                'category_id' => 40,
                'order' => 3,
                'name' => '衣夾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 195,
                'category_id' => 40,
                'order' => 4,
                'name' => '洗衣球',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 196,
                'category_id' => 41,
                'order' => 1,
                'name' => '洗衣袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 197,
                'category_id' => 41,
                'order' => 2,
                'name' => '洗衣袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 198,
                'category_id' => 41,
                'order' => 3,
                'name' => '洗衣袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 199,
                'category_id' => 41,
                'order' => 4,
                'name' => '客廳用掛勾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 200,
                'category_id' => 42,
                'order' => 1,
                'name' => '收納防塵/小型收納',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 201,
                'category_id' => 43,
                'order' => 1,
                'name' => '排水孔蓋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 202,
                'category_id' => 43,
                'order' => 2,
                'name' => '一般垃圾袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 203,
                'category_id' => 43,
                'order' => 3,
                'name' => '香味垃圾袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 120,
                'category_id' => 21,
                'order' => 3,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:08:41',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 119,
                'category_id' => 21,
                'order' => 2,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:08:45',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 118,
                'category_id' => 21,
                'order' => 1,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:08:50',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 125,
                'category_id' => 22,
                'order' => 4,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:08:54',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 122,
                'category_id' => 22,
                'order' => 1,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:08:59',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 123,
                'category_id' => 22,
                'order' => 2,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:09:03',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 124,
                'category_id' => 22,
                'order' => 3,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:09:07',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 204,
                'category_id' => 43,
                'order' => 4,
                'name' => '瓷器專區',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-11 15:14:29',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 301,
                'category_id' => 66,
                'order' => 1,
                'name' => '熱風罩',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:29',
                'deleted_at' => '2020-01-12 17:19:29',
            ),
            184 => 
            array (
                'id' => 297,
                'category_id' => 65,
                'order' => 1,
                'name' => '電源供應',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:33',
                'deleted_at' => '2020-01-12 17:19:33',
            ),
            185 => 
            array (
                'id' => 298,
                'category_id' => 65,
                'order' => 2,
                'name' => '遙控器',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:33',
                'deleted_at' => '2020-01-12 17:19:33',
            ),
            186 => 
            array (
                'id' => 299,
                'category_id' => 65,
                'order' => 3,
                'name' => '麵包機',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:33',
                'deleted_at' => '2020-01-12 17:19:33',
            ),
            187 => 
            array (
                'id' => 294,
                'category_id' => 64,
                'order' => 1,
                'name' => '泡茶機',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:37',
                'deleted_at' => '2020-01-12 17:19:37',
            ),
            188 => 
            array (
                'id' => 295,
                'category_id' => 64,
                'order' => 2,
                'name' => '電子鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:37',
                'deleted_at' => '2020-01-12 17:19:37',
            ),
            189 => 
            array (
                'id' => 296,
                'category_id' => 64,
                'order' => 3,
                'name' => '電鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:37',
                'deleted_at' => '2020-01-12 17:19:37',
            ),
            190 => 
            array (
                'id' => 290,
                'category_id' => 63,
                'order' => 1,
                'name' => '檯燈/卓',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:40',
                'deleted_at' => '2020-01-12 17:19:40',
            ),
            191 => 
            array (
                'id' => 291,
                'category_id' => 63,
                'order' => 2,
                'name' => '有線電話',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:40',
                'deleted_at' => '2020-01-12 17:19:40',
            ),
            192 => 
            array (
                'id' => 293,
                'category_id' => 63,
                'order' => 4,
                'name' => '小夜燈',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:40',
                'deleted_at' => '2020-01-12 17:19:40',
            ),
            193 => 
            array (
                'id' => 286,
                'category_id' => 62,
                'order' => 1,
                'name' => '客廳用掛勾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:43',
                'deleted_at' => '2020-01-12 17:19:43',
            ),
            194 => 
            array (
                'id' => 287,
                'category_id' => 62,
                'order' => 2,
                'name' => '客廳用掛勾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:43',
                'deleted_at' => '2020-01-12 17:19:43',
            ),
            195 => 
            array (
                'id' => 288,
                'category_id' => 62,
                'order' => 3,
                'name' => '安全防滑/撞條',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:43',
                'deleted_at' => '2020-01-12 17:19:43',
            ),
            196 => 
            array (
                'id' => 281,
                'category_id' => 61,
                'order' => 1,
                'name' => '沐浴防水',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:46',
                'deleted_at' => '2020-01-12 17:19:46',
            ),
            197 => 
            array (
                'id' => 282,
                'category_id' => 61,
                'order' => 2,
                'name' => '去角質',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:46',
                'deleted_at' => '2020-01-12 17:19:46',
            ),
            198 => 
            array (
                'id' => 283,
                'category_id' => 61,
                'order' => 3,
                'name' => '去角質',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:46',
                'deleted_at' => '2020-01-12 17:19:46',
            ),
            199 => 
            array (
                'id' => 284,
                'category_id' => 61,
                'order' => 4,
                'name' => '清潔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:46',
                'deleted_at' => '2020-01-12 17:19:46',
            ),
            200 => 
            array (
                'id' => 276,
                'category_id' => 60,
                'order' => 1,
                'name' => '牙刷架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:50',
                'deleted_at' => '2020-01-12 17:19:50',
            ),
            201 => 
            array (
                'id' => 277,
                'category_id' => 60,
                'order' => 2,
                'name' => '皂盒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:50',
                'deleted_at' => '2020-01-12 17:19:50',
            ),
            202 => 
            array (
                'id' => 278,
                'category_id' => 60,
                'order' => 3,
                'name' => '牙刷杯',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:50',
                'deleted_at' => '2020-01-12 17:19:50',
            ),
            203 => 
            array (
                'id' => 279,
                'category_id' => 60,
                'order' => 4,
                'name' => '面盆',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:50',
                'deleted_at' => '2020-01-12 17:19:50',
            ),
            204 => 
            array (
                'id' => 271,
                'category_id' => 59,
                'order' => 1,
                'name' => '蘇菲棉條/衛生棉',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:53',
                'deleted_at' => '2020-01-12 17:19:53',
            ),
            205 => 
            array (
                'id' => 272,
                'category_id' => 59,
                'order' => 2,
                'name' => '蘇菲衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:53',
                'deleted_at' => '2020-01-12 17:19:53',
            ),
            206 => 
            array (
                'id' => 273,
                'category_id' => 59,
                'order' => 3,
                'name' => '蘇菲衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:53',
                'deleted_at' => '2020-01-12 17:19:53',
            ),
            207 => 
            array (
                'id' => 274,
                'category_id' => 59,
                'order' => 4,
                'name' => '蘇菲衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:53',
                'deleted_at' => '2020-01-12 17:19:53',
            ),
            208 => 
            array (
                'id' => 267,
                'category_id' => 58,
                'order' => 1,
                'name' => '靠得住衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:58',
                'deleted_at' => '2020-01-12 17:19:58',
            ),
            209 => 
            array (
                'id' => 268,
                'category_id' => 58,
                'order' => 2,
                'name' => '靠得住衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:58',
                'deleted_at' => '2020-01-12 17:19:58',
            ),
            210 => 
            array (
                'id' => 269,
                'category_id' => 58,
                'order' => 3,
                'name' => '靠得住衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:58',
                'deleted_at' => '2020-01-12 17:19:58',
            ),
            211 => 
            array (
                'id' => 270,
                'category_id' => 58,
                'order' => 4,
                'name' => '蕾妮亞衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:58',
                'deleted_at' => '2020-01-12 17:19:58',
            ),
            212 => 
            array (
                'id' => 263,
                'category_id' => 57,
                'order' => 1,
                'name' => '隨身包濕巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:01',
                'deleted_at' => '2020-01-12 17:20:01',
            ),
            213 => 
            array (
                'id' => 264,
                'category_id' => 57,
                'order' => 2,
                'name' => '補充包濕巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:01',
                'deleted_at' => '2020-01-12 17:20:01',
            ),
            214 => 
            array (
                'id' => 265,
                'category_id' => 57,
                'order' => 3,
                'name' => '康乃馨衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:01',
                'deleted_at' => '2020-01-12 17:20:01',
            ),
            215 => 
            array (
                'id' => 262,
                'category_id' => 56,
                'order' => 1,
                'name' => '進口小百貨',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:04',
                'deleted_at' => '2020-01-12 17:20:04',
            ),
            216 => 
            array (
                'id' => 261,
                'category_id' => 55,
                'order' => 1,
                'name' => '進口小百貨',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:07',
                'deleted_at' => '2020-01-12 17:20:07',
            ),
            217 => 
            array (
                'id' => 260,
                'category_id' => 54,
                'order' => 1,
                'name' => '進口小百貨',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:11',
                'deleted_at' => '2020-01-12 17:20:11',
            ),
            218 => 
            array (
                'id' => 254,
                'category_id' => 53,
                'order' => 1,
                'name' => '塑膠杯',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:15',
                'deleted_at' => '2020-01-12 17:20:15',
            ),
            219 => 
            array (
                'id' => 255,
                'category_id' => 53,
                'order' => 2,
                'name' => '塑膠水壺',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:15',
                'deleted_at' => '2020-01-12 17:20:15',
            ),
            220 => 
            array (
                'id' => 256,
                'category_id' => 53,
                'order' => 3,
                'name' => '塑膠水壺',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:15',
                'deleted_at' => '2020-01-12 17:20:15',
            ),
            221 => 
            array (
                'id' => 257,
                'category_id' => 53,
                'order' => 4,
                'name' => '塑膠水壺',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:15',
                'deleted_at' => '2020-01-12 17:20:15',
            ),
            222 => 
            array (
                'id' => 249,
                'category_id' => 52,
                'order' => 1,
                'name' => '塑膠水壺',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:19',
                'deleted_at' => '2020-01-12 17:20:19',
            ),
            223 => 
            array (
                'id' => 250,
                'category_id' => 52,
                'order' => 2,
                'name' => '製冰盒及配件',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:19',
                'deleted_at' => '2020-01-12 17:20:19',
            ),
            224 => 
            array (
                'id' => 251,
                'category_id' => 52,
                'order' => 3,
                'name' => '調味瓶',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:19',
                'deleted_at' => '2020-01-12 17:20:19',
            ),
            225 => 
            array (
                'id' => 252,
                'category_id' => 52,
                'order' => 4,
                'name' => '免洗筷子/杯/吸管',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:19',
                'deleted_at' => '2020-01-12 17:20:19',
            ),
            226 => 
            array (
                'id' => 253,
                'category_id' => 52,
                'order' => 5,
                'name' => '免洗碗盤',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:19',
                'deleted_at' => '2020-01-12 17:20:19',
            ),
            227 => 
            array (
                'id' => 244,
                'category_id' => 51,
                'order' => 1,
                'name' => '保鮮膜',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:22',
                'deleted_at' => '2020-01-12 17:20:22',
            ),
            228 => 
            array (
                'id' => 245,
                'category_id' => 51,
                'order' => 2,
                'name' => 'PE袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:22',
                'deleted_at' => '2020-01-12 17:20:22',
            ),
            229 => 
            array (
                'id' => 246,
                'category_id' => 51,
                'order' => 3,
                'name' => '耐熱袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:22',
                'deleted_at' => '2020-01-12 17:20:22',
            ),
            230 => 
            array (
                'id' => 247,
                'category_id' => 51,
                'order' => 4,
                'name' => '砧板',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:22',
                'deleted_at' => '2020-01-12 17:20:22',
            ),
            231 => 
            array (
                'id' => 248,
                'category_id' => 51,
                'order' => 5,
                'name' => '烘焙模型',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:22',
                'deleted_at' => '2020-01-12 17:20:22',
            ),
            232 => 
            array (
                'id' => 238,
                'category_id' => 50,
                'order' => 1,
                'name' => '保鮮盒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:25',
                'deleted_at' => '2020-01-12 17:20:25',
            ),
            233 => 
            array (
                'id' => 239,
                'category_id' => 50,
                'order' => 2,
                'name' => '保鮮盒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:25',
                'deleted_at' => '2020-01-12 17:20:25',
            ),
            234 => 
            array (
                'id' => 240,
                'category_id' => 50,
                'order' => 3,
                'name' => '保鮮盒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:25',
                'deleted_at' => '2020-01-12 17:20:25',
            ),
            235 => 
            array (
                'id' => 241,
                'category_id' => 50,
                'order' => 4,
                'name' => '保鮮盒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:25',
                'deleted_at' => '2020-01-12 17:20:25',
            ),
            236 => 
            array (
                'id' => 232,
                'category_id' => 49,
                'order' => 1,
                'name' => '湯匙',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:28',
                'deleted_at' => '2020-01-12 17:20:28',
            ),
            237 => 
            array (
                'id' => 233,
                'category_id' => 49,
                'order' => 2,
                'name' => '湯匙',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:28',
                'deleted_at' => '2020-01-12 17:20:28',
            ),
            238 => 
            array (
                'id' => 234,
                'category_id' => 49,
                'order' => 3,
                'name' => '餐具組',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:28',
                'deleted_at' => '2020-01-12 17:20:28',
            ),
            239 => 
            array (
                'id' => 235,
                'category_id' => 49,
                'order' => 4,
                'name' => '開罐器',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:28',
                'deleted_at' => '2020-01-12 17:20:28',
            ),
            240 => 
            array (
                'id' => 236,
                'category_id' => 49,
                'order' => 5,
                'name' => '料理刨器',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:28',
                'deleted_at' => '2020-01-12 17:20:28',
            ),
            241 => 
            array (
                'id' => 226,
                'category_id' => 48,
                'order' => 1,
                'name' => '玻璃杯',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:31',
                'deleted_at' => '2020-01-12 17:20:31',
            ),
            242 => 
            array (
                'id' => 227,
                'category_id' => 48,
                'order' => 2,
                'name' => '瓷杯',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:31',
                'deleted_at' => '2020-01-12 17:20:31',
            ),
            243 => 
            array (
                'id' => 228,
                'category_id' => 48,
                'order' => 3,
                'name' => '廚房收納架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:31',
                'deleted_at' => '2020-01-12 17:20:31',
            ),
            244 => 
            array (
                'id' => 229,
                'category_id' => 48,
                'order' => 4,
                'name' => '廚房收納架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:31',
                'deleted_at' => '2020-01-12 17:20:31',
            ),
            245 => 
            array (
                'id' => 230,
                'category_id' => 48,
                'order' => 5,
                'name' => '滴水籃架',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:31',
                'deleted_at' => '2020-01-12 17:20:31',
            ),
            246 => 
            array (
                'id' => 220,
                'category_id' => 47,
                'order' => 1,
                'name' => '保溫瓶',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:35',
                'deleted_at' => '2020-01-12 17:20:35',
            ),
            247 => 
            array (
                'id' => 221,
                'category_id' => 47,
                'order' => 2,
                'name' => '保溫杯',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:35',
                'deleted_at' => '2020-01-12 17:20:35',
            ),
            248 => 
            array (
                'id' => 222,
                'category_id' => 47,
                'order' => 3,
                'name' => '保溫罐',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:35',
                'deleted_at' => '2020-01-12 17:20:35',
            ),
            249 => 
            array (
                'id' => 223,
                'category_id' => 47,
                'order' => 4,
                'name' => '不鏽鋼餐盒',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:35',
                'deleted_at' => '2020-01-12 17:20:35',
            ),
            250 => 
            array (
                'id' => 224,
                'category_id' => 47,
                'order' => 5,
                'name' => '各類功能碗',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:35',
                'deleted_at' => '2020-01-12 17:20:35',
            ),
            251 => 
            array (
                'id' => 214,
                'category_id' => 46,
                'order' => 1,
                'name' => '內鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:38',
                'deleted_at' => '2020-01-12 17:20:38',
            ),
            252 => 
            array (
                'id' => 215,
                'category_id' => 46,
                'order' => 2,
                'name' => '湯鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:38',
                'deleted_at' => '2020-01-12 17:20:38',
            ),
            253 => 
            array (
                'id' => 216,
                'category_id' => 46,
                'order' => 3,
                'name' => '湯鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:38',
                'deleted_at' => '2020-01-12 17:20:38',
            ),
            254 => 
            array (
                'id' => 217,
                'category_id' => 46,
                'order' => 4,
                'name' => '平底鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:38',
                'deleted_at' => '2020-01-12 17:20:38',
            ),
            255 => 
            array (
                'id' => 218,
                'category_id' => 46,
                'order' => 5,
                'name' => '雪平鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:38',
                'deleted_at' => '2020-01-12 17:20:38',
            ),
            256 => 
            array (
                'id' => 219,
                'category_id' => 46,
                'order' => 6,
                'name' => '炒鍋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:38',
                'deleted_at' => '2020-01-12 17:20:38',
            ),
            257 => 
            array (
                'id' => 208,
                'category_id' => 45,
                'order' => 1,
                'name' => '菜瓜布',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:41',
                'deleted_at' => '2020-01-12 17:20:41',
            ),
            258 => 
            array (
                'id' => 209,
                'category_id' => 45,
                'order' => 2,
                'name' => '菜瓜布',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:41',
                'deleted_at' => '2020-01-12 17:20:41',
            ),
            259 => 
            array (
                'id' => 210,
                'category_id' => 45,
                'order' => 3,
                'name' => '鋼絲球刷',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:41',
                'deleted_at' => '2020-01-12 17:20:41',
            ),
            260 => 
            array (
                'id' => 211,
                'category_id' => 45,
                'order' => 4,
                'name' => '抹布',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:41',
                'deleted_at' => '2020-01-12 17:20:41',
            ),
            261 => 
            array (
                'id' => 212,
                'category_id' => 45,
                'order' => 5,
                'name' => '抹布',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:41',
                'deleted_at' => '2020-01-12 17:20:41',
            ),
            262 => 
            array (
                'id' => 205,
                'category_id' => 44,
                'order' => 1,
                'name' => '塑膠手套',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:44',
                'deleted_at' => '2020-01-12 17:20:44',
            ),
            263 => 
            array (
                'id' => 206,
                'category_id' => 44,
                'order' => 2,
                'name' => '塑膠手套',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:44',
                'deleted_at' => '2020-01-12 17:20:44',
            ),
            264 => 
            array (
                'id' => 207,
                'category_id' => 44,
                'order' => 3,
                'name' => '防油污墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:44',
                'deleted_at' => '2020-01-12 17:20:44',
            ),
            265 => 
            array (
                'id' => 91,
                'category_id' => 14,
                'order' => 1,
                'name' => '果醬',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 13:39:40',
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 94,
                'category_id' => 14,
                'order' => 4,
                'name' => '調理包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 13:42:15',
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 351,
                'category_id' => 19,
                'order' => 4,
                'name' => '果凍蒟蒻',
                'created_at' => '2020-01-12 14:05:22',
                'updated_at' => '2020-01-12 14:05:22',
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 121,
                'category_id' => 21,
                'order' => 4,
                'name' => '泡麵',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 14:08:36',
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'order' => 2,
                'name' => '進口袋裝糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:28',
                'deleted_at' => '2020-01-12 16:23:28',
            ),
            270 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'order' => 3,
                'name' => '國產袋裝糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:28',
                'deleted_at' => '2020-01-12 16:23:28',
            ),
            271 => 
            array (
                'id' => 7,
                'category_id' => 2,
                'order' => 4,
                'name' => '糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            272 => 
            array (
                'id' => 8,
                'category_id' => 2,
                'order' => 5,
                'name' => '糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            273 => 
            array (
                'id' => 9,
                'category_id' => 2,
                'order' => 6,
                'name' => '糖果',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            274 => 
            array (
                'id' => 10,
                'category_id' => 2,
                'order' => 7,
                'name' => '黑糖',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:30',
                'deleted_at' => '2020-01-12 16:23:30',
            ),
            275 => 
            array (
                'id' => 16,
                'category_id' => 3,
                'order' => 6,
                'name' => '國產巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            276 => 
            array (
                'id' => 17,
                'category_id' => 3,
                'order' => 7,
                'name' => '國產巧克力',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            277 => 
            array (
                'id' => 18,
                'category_id' => 3,
                'order' => 8,
                'name' => '棉花糖',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:33',
                'deleted_at' => '2020-01-12 16:23:33',
            ),
            278 => 
            array (
                'id' => 26,
                'category_id' => 4,
                'order' => 8,
                'name' => '日韓餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:35',
                'deleted_at' => '2020-01-12 16:23:35',
            ),
            279 => 
            array (
                'id' => 34,
                'category_id' => 5,
                'order' => 8,
                'name' => '歐美餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:37',
                'deleted_at' => '2020-01-12 16:23:37',
            ),
            280 => 
            array (
                'id' => 42,
                'category_id' => 6,
                'order' => 8,
                'name' => '沙其瑪',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:40',
                'deleted_at' => '2020-01-12 16:23:40',
            ),
            281 => 
            array (
                'id' => 57,
                'category_id' => 8,
                'order' => 7,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            282 => 
            array (
                'id' => 58,
                'category_id' => 8,
                'order' => 8,
                'name' => '國產餅乾',
                'created_at' => '2020-01-11 15:14:28',
                'updated_at' => '2020-01-12 16:23:45',
                'deleted_at' => '2020-01-12 16:23:45',
            ),
            283 => 
            array (
                'id' => 66,
                'category_id' => 9,
                'order' => 8,
                'name' => '太空包餅乾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:47',
                'deleted_at' => '2020-01-12 16:23:47',
            ),
            284 => 
            array (
                'id' => 74,
                'category_id' => 10,
                'order' => 8,
                'name' => '保健食品',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:23:57',
                'deleted_at' => '2020-01-12 16:23:57',
            ),
            285 => 
            array (
                'id' => 88,
                'category_id' => 12,
                'order' => 7,
                'name' => '奶粉',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            286 => 
            array (
                'id' => 89,
                'category_id' => 12,
                'order' => 8,
                'name' => '奶粉',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:09',
                'deleted_at' => '2020-01-12 16:37:09',
            ),
            287 => 
            array (
                'id' => 349,
                'category_id' => 88,
                'order' => 1,
                'name' => '旅遊配件',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:00:45',
                'deleted_at' => '2020-01-12 17:00:45',
            ),
            288 => 
            array (
                'id' => 350,
                'category_id' => 88,
                'order' => 2,
                'name' => '行李箱',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:00:45',
                'deleted_at' => '2020-01-12 17:00:45',
            ),
            289 => 
            array (
                'id' => 348,
                'category_id' => 87,
                'order' => 1,
                'name' => '皮夾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:00:51',
                'deleted_at' => '2020-01-12 17:00:51',
            ),
            290 => 
            array (
                'id' => 344,
                'category_id' => 86,
                'order' => 1,
                'name' => '零錢包/萬用包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:00:56',
                'deleted_at' => '2020-01-12 17:00:56',
            ),
            291 => 
            array (
                'id' => 345,
                'category_id' => 86,
                'order' => 2,
                'name' => '零錢包/萬用包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:00:56',
                'deleted_at' => '2020-01-12 17:00:56',
            ),
            292 => 
            array (
                'id' => 346,
                'category_id' => 86,
                'order' => 3,
                'name' => '萬用包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:00:56',
                'deleted_at' => '2020-01-12 17:00:56',
            ),
            293 => 
            array (
                'id' => 347,
                'category_id' => 86,
                'order' => 4,
                'name' => '飲料杯套',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:00:56',
                'deleted_at' => '2020-01-12 17:00:56',
            ),
            294 => 
            array (
                'id' => 340,
                'category_id' => 85,
                'order' => 1,
                'name' => 'PVC袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:01:01',
                'deleted_at' => '2020-01-12 17:01:01',
            ),
            295 => 
            array (
                'id' => 341,
                'category_id' => 85,
                'order' => 2,
                'name' => 'PVC袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:01:01',
                'deleted_at' => '2020-01-12 17:01:01',
            ),
            296 => 
            array (
                'id' => 342,
                'category_id' => 85,
                'order' => 3,
                'name' => 'PVC袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:01:01',
                'deleted_at' => '2020-01-12 17:01:01',
            ),
            297 => 
            array (
                'id' => 343,
                'category_id' => 85,
                'order' => 4,
                'name' => '保冰/溫袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:01:01',
                'deleted_at' => '2020-01-12 17:01:01',
            ),
            298 => 
            array (
                'id' => 339,
                'category_id' => 84,
                'order' => 1,
                'name' => '淑女包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:01:06',
                'deleted_at' => '2020-01-12 17:01:06',
            ),
            299 => 
            array (
                'id' => 338,
                'category_id' => 83,
                'order' => 1,
                'name' => '淑女包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:01:27',
                'deleted_at' => '2020-01-12 17:01:27',
            ),
            300 => 
            array (
                'id' => 337,
                'category_id' => 82,
                'order' => 1,
                'name' => '斜背包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:01:33',
                'deleted_at' => '2020-01-12 17:01:33',
            ),
            301 => 
            array (
                'id' => 336,
                'category_id' => 81,
                'order' => 1,
                'name' => '斜背包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:28',
                'deleted_at' => '2020-01-12 17:18:28',
            ),
            302 => 
            array (
                'id' => 332,
                'category_id' => 80,
                'order' => 1,
                'name' => '腰包/萬用包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:33',
                'deleted_at' => '2020-01-12 17:18:33',
            ),
            303 => 
            array (
                'id' => 333,
                'category_id' => 80,
                'order' => 2,
                'name' => '腰包/萬用包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:33',
                'deleted_at' => '2020-01-12 17:18:33',
            ),
            304 => 
            array (
                'id' => 334,
                'category_id' => 80,
                'order' => 3,
                'name' => '小提包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:33',
                'deleted_at' => '2020-01-12 17:18:33',
            ),
            305 => 
            array (
                'id' => 335,
                'category_id' => 80,
                'order' => 4,
                'name' => '小提包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:33',
                'deleted_at' => '2020-01-12 17:18:33',
            ),
            306 => 
            array (
                'id' => 331,
                'category_id' => 79,
                'order' => 1,
                'name' => '後背包',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:37',
                'deleted_at' => '2020-01-12 17:18:37',
            ),
            307 => 
            array (
                'id' => 330,
                'category_id' => 78,
                'order' => 1,
                'name' => '後背包旅行袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:41',
                'deleted_at' => '2020-01-12 17:18:41',
            ),
            308 => 
            array (
                'id' => 329,
                'category_id' => 77,
                'order' => 1,
                'name' => '後背包/旅行袋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:45',
                'deleted_at' => '2020-01-12 17:18:45',
            ),
            309 => 
            array (
                'id' => 326,
                'category_id' => 76,
                'order' => 1,
                'name' => '門墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:50',
                'deleted_at' => '2020-01-12 17:18:50',
            ),
            310 => 
            array (
                'id' => 327,
                'category_id' => 76,
                'order' => 2,
                'name' => '門墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:50',
                'deleted_at' => '2020-01-12 17:18:50',
            ),
            311 => 
            array (
                'id' => 328,
                'category_id' => 76,
                'order' => 3,
                'name' => '防滑地墊/裕墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:50',
                'deleted_at' => '2020-01-12 17:18:50',
            ),
            312 => 
            array (
                'id' => 322,
                'category_id' => 75,
                'order' => 1,
                'name' => '功能坐墊/兩用坐墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:54',
                'deleted_at' => '2020-01-12 17:18:54',
            ),
            313 => 
            array (
                'id' => 323,
                'category_id' => 75,
                'order' => 2,
                'name' => '布座墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:54',
                'deleted_at' => '2020-01-12 17:18:54',
            ),
            314 => 
            array (
                'id' => 324,
                'category_id' => 75,
                'order' => 3,
                'name' => '布座墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:54',
                'deleted_at' => '2020-01-12 17:18:54',
            ),
            315 => 
            array (
                'id' => 325,
                'category_id' => 75,
                'order' => 4,
                'name' => '造型抱枕',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:54',
                'deleted_at' => '2020-01-12 17:18:54',
            ),
            316 => 
            array (
                'id' => 321,
                'category_id' => 74,
                'order' => 1,
                'name' => '頸枕 寢具',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:18:57',
                'deleted_at' => '2020-01-12 17:18:57',
            ),
            317 => 
            array (
                'id' => 317,
                'category_id' => 73,
                'order' => 1,
                'name' => '夾腳拖',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:01',
                'deleted_at' => '2020-01-12 17:19:01',
            ),
            318 => 
            array (
                'id' => 318,
                'category_id' => 73,
                'order' => 2,
                'name' => '夾腳拖',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:01',
                'deleted_at' => '2020-01-12 17:19:01',
            ),
            319 => 
            array (
                'id' => 319,
                'category_id' => 73,
                'order' => 3,
                'name' => '室內蓆拖',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:01',
                'deleted_at' => '2020-01-12 17:19:01',
            ),
            320 => 
            array (
                'id' => 320,
                'category_id' => 73,
                'order' => 4,
                'name' => '浴室拖',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:01',
                'deleted_at' => '2020-01-12 17:19:01',
            ),
            321 => 
            array (
                'id' => 316,
                'category_id' => 72,
                'order' => 1,
                'name' => '室外男拖/室外女拖',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:05',
                'deleted_at' => '2020-01-12 17:19:05',
            ),
            322 => 
            array (
                'id' => 314,
                'category_id' => 71,
                'order' => 1,
                'name' => '室內皮拖',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:10',
                'deleted_at' => '2020-01-12 17:19:10',
            ),
            323 => 
            array (
                'id' => 315,
                'category_id' => 71,
                'order' => 2,
                'name' => '室內皮拖',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:10',
                'deleted_at' => '2020-01-12 17:19:10',
            ),
            324 => 
            array (
                'id' => 313,
                'category_id' => 70,
                'order' => 1,
                'name' => '室外/室內拖鞋',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:14',
                'deleted_at' => '2020-01-12 17:19:14',
            ),
            325 => 
            array (
                'id' => 310,
                'category_id' => 69,
                'order' => 1,
                'name' => '一般毛巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:19',
                'deleted_at' => '2020-01-12 17:19:19',
            ),
            326 => 
            array (
                'id' => 311,
                'category_id' => 69,
                'order' => 2,
                'name' => '一般毛巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:19',
                'deleted_at' => '2020-01-12 17:19:19',
            ),
            327 => 
            array (
                'id' => 312,
                'category_id' => 69,
                'order' => 3,
                'name' => '組入毛巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:19',
                'deleted_at' => '2020-01-12 17:19:19',
            ),
            328 => 
            array (
                'id' => 308,
                'category_id' => 68,
                'order' => 1,
                'name' => '一般童巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:22',
                'deleted_at' => '2020-01-12 17:19:22',
            ),
            329 => 
            array (
                'id' => 309,
                'category_id' => 68,
                'order' => 2,
                'name' => '一般童巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:22',
                'deleted_at' => '2020-01-12 17:19:22',
            ),
            330 => 
            array (
                'id' => 304,
                'category_id' => 67,
                'order' => 1,
                'name' => '一般浴巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:26',
                'deleted_at' => '2020-01-12 17:19:26',
            ),
            331 => 
            array (
                'id' => 305,
                'category_id' => 67,
                'order' => 2,
                'name' => '一般浴巾/裕裙',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:26',
                'deleted_at' => '2020-01-12 17:19:26',
            ),
            332 => 
            array (
                'id' => 306,
                'category_id' => 67,
                'order' => 3,
                'name' => '一般浴巾/海灘巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:26',
                'deleted_at' => '2020-01-12 17:19:26',
            ),
            333 => 
            array (
                'id' => 307,
                'category_id' => 67,
                'order' => 4,
                'name' => '授權浴巾',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:26',
                'deleted_at' => '2020-01-12 17:19:26',
            ),
            334 => 
            array (
                'id' => 302,
                'category_id' => 66,
                'order' => 2,
                'name' => '吹風機',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:29',
                'deleted_at' => '2020-01-12 17:19:29',
            ),
            335 => 
            array (
                'id' => 303,
                'category_id' => 66,
                'order' => 3,
                'name' => '吹風機',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:29',
                'deleted_at' => '2020-01-12 17:19:29',
            ),
            336 => 
            array (
                'id' => 300,
                'category_id' => 65,
                'order' => 4,
                'name' => '電慈爐',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:33',
                'deleted_at' => '2020-01-12 17:19:33',
            ),
            337 => 
            array (
                'id' => 292,
                'category_id' => 63,
                'order' => 3,
                'name' => '刮毛球機',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:40',
                'deleted_at' => '2020-01-12 17:19:40',
            ),
            338 => 
            array (
                'id' => 289,
                'category_id' => 62,
                'order' => 4,
                'name' => '手工具',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:43',
                'deleted_at' => '2020-01-12 17:19:43',
            ),
            339 => 
            array (
                'id' => 285,
                'category_id' => 61,
                'order' => 5,
                'name' => '清潔',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:46',
                'deleted_at' => '2020-01-12 17:19:46',
            ),
            340 => 
            array (
                'id' => 280,
                'category_id' => 60,
                'order' => 5,
                'name' => '水杓',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:50',
                'deleted_at' => '2020-01-12 17:19:50',
            ),
            341 => 
            array (
                'id' => 275,
                'category_id' => 59,
                'order' => 5,
                'name' => '蘇菲衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:19:53',
                'deleted_at' => '2020-01-12 17:19:53',
            ),
            342 => 
            array (
                'id' => 266,
                'category_id' => 57,
                'order' => 4,
                'name' => '好自在衛生棉墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:01',
                'deleted_at' => '2020-01-12 17:20:01',
            ),
            343 => 
            array (
                'id' => 258,
                'category_id' => 53,
                'order' => 5,
                'name' => '塑膠水壺',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:15',
                'deleted_at' => '2020-01-12 17:20:15',
            ),
            344 => 
            array (
                'id' => 259,
                'category_id' => 53,
                'order' => 6,
                'name' => '冷水壺',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:15',
                'deleted_at' => '2020-01-12 17:20:15',
            ),
            345 => 
            array (
                'id' => 242,
                'category_id' => 50,
                'order' => 5,
                'name' => '玻璃罐',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:25',
                'deleted_at' => '2020-01-12 17:20:25',
            ),
            346 => 
            array (
                'id' => 243,
                'category_id' => 50,
                'order' => 6,
                'name' => '密封罐',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:25',
                'deleted_at' => '2020-01-12 17:20:25',
            ),
            347 => 
            array (
                'id' => 237,
                'category_id' => 49,
                'order' => 6,
                'name' => '杯類配件',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:28',
                'deleted_at' => '2020-01-12 17:20:28',
            ),
            348 => 
            array (
                'id' => 231,
                'category_id' => 48,
                'order' => 6,
                'name' => '米桶',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:31',
                'deleted_at' => '2020-01-12 17:20:31',
            ),
            349 => 
            array (
                'id' => 225,
                'category_id' => 47,
                'order' => 6,
                'name' => '各類功能碗',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:35',
                'deleted_at' => '2020-01-12 17:20:35',
            ),
            350 => 
            array (
                'id' => 213,
                'category_id' => 45,
                'order' => 6,
                'name' => '防油污墊',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 17:20:41',
                'deleted_at' => '2020-01-12 17:20:41',
            ),
        ));
        
        
    }
}