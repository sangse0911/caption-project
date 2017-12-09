<?php

use Illuminate\Database\Seeder;

class BookCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_categories')->delete();

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 51; $i++) {
            $data = array(

                [
                    'book_id' => $i,
                    'category_id' => rand(1, 6),
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
            );
            DB::table('book_categories')->insert($data);
            $data = null;
        }
    }
}
