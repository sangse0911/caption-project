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

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $data = array(
                'admin_id' => '1',
                'status' => '0',
                'location' => $faker->macAddress,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );

            DB::table('bookshelves')->insert($data);
            $data = null;
        }
        for ($i = 50; $i < 100; $i++) {
            $data = array(
                'admin_id' => '1',
                'status' => '1',
                'location' => $faker->macAddress,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );

            DB::table('bookshelves')->insert($data);
            $data = null;
        }
    }
}
