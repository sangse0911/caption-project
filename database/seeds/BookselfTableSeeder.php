<?php

use Illuminate\Database\Seeder;

class BookselfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookselfs')->delete();

        for ($i = 0; $i < 10; $i++) {
            $data = array(
                'admin_id' => '1',
                'status' => '1',
                'location' => str_random(10),
            );

            DB::table('bookselfs')->insert($data);
            $data = null;
        }
    }
}
