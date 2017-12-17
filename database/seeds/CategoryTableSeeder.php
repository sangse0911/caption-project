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

        $data = array(
            [
                'name' => 'Sách tình cảm',
                'admin_id' => '1',
                'path' => 'love_book.png',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => 'Sách trinh thám',
                'admin_id' => '1',
                'path' => 'art.jpg',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => 'Sách hồi kí',
                'admin_id' => '1',
                'path' => 'memories.png',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => 'Sách tự truyện',
                'admin_id' => '1',
                'path' => 'mystery.jpg',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => 'Sách dành cho giới trẻ',
                'admin_id' => '1',
                'path' => 'teen.jpg',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
            [
                'name' => 'Tiểu thuyết',
                'admin_id' => '1',
                'path' => 'war.jpg',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        );

        DB::table('categories')->insert($data);
        $data = null;

    }
}
