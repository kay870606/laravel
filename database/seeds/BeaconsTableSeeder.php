<?php

use Illuminate\Database\Seeder;

class BeaconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('beacons')->truncate();

        for($i=0;$i<15;$i++)
            \App\Beacon::create();

    }
}
