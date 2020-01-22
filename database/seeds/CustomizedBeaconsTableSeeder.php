<?php

use Illuminate\Database\Seeder;

class CustomizedBeaconsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('beacons')->delete();
        
        \DB::table('beacons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '0000',
                'mac' => '0C:61:CF:1A:04:05',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:40:11',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '0001',
                'mac' => '0C:61:CF:1A:06:C8',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:40:46',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '0002',
                'mac' => '0C:61:CF:1A:01:12',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:52:05',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '0100',
                'mac' => '0C:61:CF:1A:01:23',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:52:22',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '0101',
                'mac' => '0C:61:CF:1A:01:24',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:52:33',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '0102',
                'mac' => '0C:61:CF:1A:01:25',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:52:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '0200',
                'mac' => '0C:61:CF:1A:01:26',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:52:52',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => '0201',
                'mac' => '0C:61:CF:1A:01:27',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:55:00',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => '0202',
                'mac' => '0C:61:CF:1A:01:28',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:55:16',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => '0300',
                'mac' => '0C:61:CF:1A:01:29',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:55:23',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => '0301',
                'mac' => '0C:61:CF:1A:01:2A',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:55:41',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => '0302',
                'mac' => '0C:61:CF:1A:01:2B',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:56:37',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => '0400',
                'mac' => '0C:61:CF:1A:01:2C',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:56:49',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => '0401',
                'mac' => '0C:61:CF:1A:01:2D',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:57:03',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => '0402',
                'mac' => '0C:61:CF:1A:01:2E',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:57:44',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => '0500',
                'mac' => '0C:61:CF:1A:01:2F',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:57:54',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '0501',
                'mac' => '0C:61:CF:1A:01:30',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:58:52',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => '0502',
                'mac' => '0C:61:CF:1A:01:31',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:59:00',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => '0600',
                'mac' => '0C:61:CF:1A:01:32',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:59:07',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => '0601',
                'mac' => '0C:61:CF:1A:01:33',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:59:13',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => '0602',
                'mac' => '0C:61:CF:1A:01:34',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:59:19',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => '0700',
                'mac' => '0C:61:CF:1A:01:35',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:59:27',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => '0701',
                'mac' => '0C:61:CF:1A:01:36',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:59:36',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => '0702',
                'mac' => '0C:61:CF:1A:01:37',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 15:59:56',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '0800',
                'mac' => '0C:61:CF:1A:01:38',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:00:29',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => '0801',
                'mac' => '0C:61:CF:1A:01:39',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:00:35',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => '0802',
                'mac' => '0C:61:CF:1A:01:3A',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:00:42',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => '0900',
                'mac' => '0C:61:CF:1A:01:3B',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:00:51',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => '0901',
                'mac' => '0C:61:CF:1A:01:3C',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:00:59',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => '0902',
                'mac' => '0C:61:CF:1A:01:3D',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:01:06',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => '1000',
                'mac' => '0C:61:CF:1A:01:3E',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:01:14',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => '1001',
                'mac' => '0C:61:CF:1A:01:3F',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:01:22',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => '1002',
                'mac' => '0C:61:CF:1A:01:40',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:01:37',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => '1100',
                'mac' => '0C:61:CF:1A:01:41',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:01:44',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => '1101',
                'mac' => '0C:61:CF:1A:01:42',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:01:50',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => '1102',
                'mac' => '0C:61:CF:1A:01:43',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:01:57',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => '1200',
                'mac' => '0C:61:CF:1A:01:44',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:04',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => '1201',
                'mac' => '0C:61:CF:1A:01:45',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:13',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => '1202',
                'mac' => '0C:61:CF:1A:01:46',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:20',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => '1300',
                'mac' => '0C:61:CF:1A:01:47',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:26',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => '1301',
                'mac' => '0C:61:CF:1A:01:48',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:34',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => '1302',
                'mac' => '0C:61:CF:1A:01:49',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:43',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => '1400',
                'mac' => '0C:61:CF:1A:01:4A',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:50',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => '1401',
                'mac' => '0C:61:CF:1A:01:4B',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:02:58',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => '1402',
                'mac' => '0C:61:CF:1A:01:4C',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:03:06',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => '1500',
                'mac' => '0C:61:CF:1A:01:4D',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:03:14',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => '1501',
                'mac' => '0C:61:CF:1A:01:4E',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:03:21',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => '1502',
                'mac' => '0C:61:CF:1A:01:4F',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:03:32',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}