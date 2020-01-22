<?php

use Illuminate\Database\Seeder;

class CustomizedActivitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activities')->delete();
        
        \DB::table('activities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '鼠來寶迎財神抽大獎',
                'image_path' => 'activities/2020-01-12/wMRtbGeKR7ImXBsYzB0fWCsKpVFmrLhuZOpB9dTG.png',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:36:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '特別企劃迎春超值加價GO',
                'image_path' => 'activities/2020-01-12/VzLskOP1rj6X85p9JuW364rtx7hvkzF8HEedINpE.jpeg',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:17',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '寒假書包好禮回饋',
                'image_path' => 'activities/2020-01-12/unhKwRJwR9qLykfD7WMI7RuSvaDSR41vqpPhDzSt.jpeg',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:37:55',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '彩妝滿額送',
                'image_path' => 'activities/2020-01-12/RkIa4DTrmVS0YAtoc22iA8hN5bOvJjB82mzvLBda.jpeg',
                'created_at' => '2020-01-11 15:14:29',
                'updated_at' => '2020-01-12 16:38:21',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => '襪子迎春送',
                'image_path' => 'activities/2020-01-12/MbkYGAIKdmEkiMmEAZvsASTgarxVRhAj324zDYwR.jpeg',
                'created_at' => '2020-01-12 16:38:55',
                'updated_at' => '2020-01-12 16:38:55',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '專櫃/迎新滿千送百/開春滿千現抵',
                'image_path' => 'activities/2020-01-12/DJWuFN0rgWpMMo3WOmbIesyQSGJnnVEFwLAOblL3.jpeg',
                'created_at' => '2020-01-12 16:40:20',
                'updated_at' => '2020-01-12 16:40:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}