<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            'name' => str_random(5),
            'email' => str_random(5) . '@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
