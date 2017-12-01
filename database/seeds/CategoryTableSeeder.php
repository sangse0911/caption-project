<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        for ($i = 0; $i < 6; $i++) {
            $data = array(
                'name' => str_random(12),
                'admin_id' => '1',
                'path' => 'love_book.png',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );

            DB::table('categories')->insert($data);
            $data = null;
        }
    }
}
