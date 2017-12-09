<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->delete();

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 51; $i++) {
            $data = array(
                'name' => $faker->colorName,
                'introduce' => $faker->text(rand(10, 30)),
                'description' => $faker->text($maxNbChars = 200),
                'admin_id' => '1',
                'bookshelf_id' => $i,
                'status' => '1',
                'price' => rand(10000, 100000),
                'rental_fee' => 0,
                'author' => $faker->name($gender = null | 'male' | 'female'),
                'company' => $faker->company,
                'year' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
                'republish' => rand(1, 15),
                'isbn' => $faker->isbn13,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );

            DB::table('books')->insert($data);
            $data = null;
        }
        for ($i = 0; $i < 20; $i++) {
            $data = array(
                'name' => $faker->colorName,
                'introduce' => $faker->text(rand(10, 30)),
                'description' => $faker->text($maxNbChars = 200),
                'admin_id' => '1',
                'bookshelf_id' => '1',
                'status' => '4',
                'price' => rand(10000, 100000),
                'rental_fee' => 0,
                'author' => $faker->name($gender = null | 'male' | 'female'),
                'company' => $faker->company,
                'year' => $faker->dateTimeThisDecade($max = 'now', $timezone = null),
                'republish' => rand(1, 15),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );

            DB::table('books')->insert($data);
            $data = null;
        }
    }
}
