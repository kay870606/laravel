<?php

use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => '衛生紙'],
            ['name' => '微波爐'],
        ];

        DB::table('keywords')->truncate();

        foreach ($items as $item) {
            \App\Keyword::create($item);
        }

        $items = [
            ['keyword_id' => 1, 'name' => '烤雞'],
            ['keyword_id' => 1, 'name' => '牛肉'],
            ['keyword_id' => 2, 'name' => '衣服'],
            ['keyword_id' => 2, 'name' => '櫃子'],
        ];

        DB::table('keyword_mappings')->truncate();

        foreach ($items as $item) {
            \App\KeywordMapping::create($item);
        }
    }
}
