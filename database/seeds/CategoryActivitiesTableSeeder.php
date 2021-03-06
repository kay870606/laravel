<?php

use Illuminate\Database\Seeder;

class CategoryActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['category_id' => 14, 'name' => '自然之顏蘇打餅乾系列特價$69', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/1.png'],
            ['category_id' => 14, 'name' => '喜年來金牛角家庭號特價$59', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/11.png'],
            ['category_id' => 16, 'name' => '優雅食周遊列國箱/超寬雞汁10入(箱)特價$239/269', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/12.png'],
            ['category_id' => 16, 'name' => '茱蒂絲雷蒙德桶裝系列特價$159', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/15.png'],
            ['category_id' => 16, 'name' => '北田蒟蒻糙米捲特價$79', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/16.png'],
            ['category_id' => 14, 'name' => '老楊好運來鹹蛋黃餅230g特價$109', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/17.png'],
            ['category_id' => 14, 'name' => '77新貴派大格酥20包入特價$79', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/18.png'],
            ['category_id' => 14, 'name' => '固力果三味甜筒餅特價$119', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/19.png'],
            ['category_id' => 14, 'name' => '日本甘樂鮮果實軟糖星空版系列特價$45', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/2.png'],
            ['category_id' => 14, 'name' => '新貴派好事花生綜合箱/經典綜合箱特價$179', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/13.png'],
            ['category_id' => 16, 'name' => '東鳩薯圈圈鹽味特價$99', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/20.png'],
            ['category_id' => 18, 'name' => '麗芝士/麗巧克威化餅/蛋捲(起司/巧克力)特價$89', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/21.png'],
            ['category_id' => 18, 'name' => '巧益玉米濃湯棒240g特價$59', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/3.png'],
            ['category_id' => 18, 'name' => '特鮮起司餅/蔬菜餅特價$79', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/14.png'],
            ['category_id' => 14, 'name' => '海鮮檸檬糖/薄荷岩鹽檸檬糖任兩包$85', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/4.png'],
            ['category_id' => 20, 'name' => '袋裝口香28g系列任兩包$56', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/5.png'],
            ['category_id' => 22, 'name' => '偉特鮮奶油糖90g/哈瑞黃金熊Q軟糖100g特價$49', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/6.png'],
            ['category_id' => 24, 'name' => '薄片巧克力系列特價$99', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/7.png'],
            ['category_id' => 28, 'name' => '金莎巧克力3入特價$30', 'price' => 332, 'description' => '好吃的雞精', 'image_path' => 'images/category-activities/2019-12-02/8.png'],
        ];

        DB::table('category_activities')->truncate();

        foreach ($items as $item) {
            \App\CategoryActivity::create($item);
        }
    }
}
