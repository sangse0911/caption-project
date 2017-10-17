<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        for ($i = 0; $i < 3; $i++) {
            $data = array(
                'name' => 'admin' . rand(1, 10),
                'password' => bcrypt('123'),
                'email' => 'admin' . rand(1, 10) . '@gmail.com',
                'role_id' => '1',
            );

            DB::table('admins')->insert($data);
            $data = null;
        }
    }
}
