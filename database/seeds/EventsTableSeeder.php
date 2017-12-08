<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();

        $faker = Faker\Factory::create();

        $data = array(

            [
                'admin_id' => 1,
                'title' => $faker->realText(rand(10, 20)),
                'path' => 'Capture.PNG',
                'description' => $faker->realText(rand(50, 100)),
                'status' => '1',
                'start_date' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
                'end_date' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),

            ],
            [
                'admin_id' => 1,
                'title' => $faker->realText(rand(10, 20)),
                'path' => 'Capture2.PNG',
                'description' => $faker->realText(rand(50, 100)),
                'status' => '1',
                'start_date' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
                'end_date' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),

            ],
            [
                'admin_id' => 1,
                'title' => $faker->realText(rand(10, 20)),
                'path' => 'Capture3.PNG',
                'description' => $faker->realText(rand(50, 100)),
                'status' => '1',
                'start_date' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
                'end_date' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),

            ],
        );
        DB::table('events')->insert($data);
        $data = null;
    }
}
