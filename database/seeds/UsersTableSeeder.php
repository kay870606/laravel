<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Test', 'email' => 'test@gmail.com', 'password' => Hash::make('testtest')],
        ];

        DB::table('users')->truncate();

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
