<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 1, 'image_path' => 'activities/2019-12-02/1.png'],
            ['name' => 2, 'image_path' => 'activities/2019-12-02/2.png'],
            ['name' => 3, 'image_path' => 'activities/2019-12-02/3.png'],
            ['name' => 4, 'image_path' => 'activities/2019-12-02/4.png'],
        ];

        DB::table('activities')->truncate();

        foreach ($items as $item) {
            \App\Activity::create($item);
        }
    }
}
