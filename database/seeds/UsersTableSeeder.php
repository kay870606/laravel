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
            ['name' => 'Kay', 'email' => 'aaaaa777@gmail.com', 'password' => Hash::make('kay870606')],
        ];

        DB::table('users')->truncate();

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
