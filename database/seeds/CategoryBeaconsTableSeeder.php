<?php

use Illuminate\Database\Seeder;

class CategoryBeaconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('category_beacons')->truncate();
        Schema::enableForeignKeyConstraints();

        for ($i = 1, $j = 14; $i <= 45, $j <= 42; $i++, $j += 2) {
            \App\CategoryBeacon::create(['category_id' => $j, 'beacon_id' => $i]);
            $i++;
            \App\CategoryBeacon::create(['category_id' => $j, 'beacon_id' => $i]);
            $i++;
            \App\CategoryBeacon::create(['category_id' => $j, 'beacon_id' => $i]);
        }
    }
}
