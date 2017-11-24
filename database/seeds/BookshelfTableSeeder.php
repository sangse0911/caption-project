<?php

use Illuminate\Database\Seeder;

class BookshelfTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookshelves')->delete();

        for ($i = 0; $i < 10; $i++) {
            $data = array(
                'admin_id' => '1',
                'status' => '1',
                'location' => str_random(10),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );

            DB::table('bookshelves')->insert($data);
            $data = null;
        }
    }
}
