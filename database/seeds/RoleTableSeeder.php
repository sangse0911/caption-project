<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        $row = 5;

        for ($i = 0; $i < $row; $i++) {
            $data = array(
                'name' => str_random(12),
            );

            DB::table('roles')->insert($data);
            $data = null;
        }

    }
}
