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

        for ($i = 0; $i < 5; $i++) {
            $data = array(
                'name' => str_random(5),
                'email' => str_random(5) . '@gmail.com',
                'password' => bcrypt('123'),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );
            DB::table('users')->insert($data);
            $data = null;
        }
    }
}
