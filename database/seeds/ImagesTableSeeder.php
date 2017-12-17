<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 7; $i++) {

            $data = array(
                [
                    'path' => '2.jpg',
                    'book_id' => $i * 10 + 1,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '2.jpg',
                    'book_id' => $i * 10 + 2,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '3.jpg',
                    'book_id' => $i * 10 + 3,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '4.jpg',
                    'book_id' => $i * 10 + 4,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '5.jpg',
                    'book_id' => $i * 10 + 5,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '6.jpg',
                    'book_id' => $i * 10 + 6,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '7.jpg',
                    'book_id' => $i * 10 + 7,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '8.jpg',
                    'book_id' => $i * 10 + 8,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '9.jpg',
                    'book_id' => $i * 10 + 9,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'path' => '8.jpg',
                    'book_id' => $i * 10 + 10,
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
            );

            DB::table('images')->insert($data);
            $data = null;
        }
    }
}
