<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            $data = array(
                'name' => $faker->name,
                'password' => bcrypt('123'),
                'email' => 'admin' . rand(1, 40) . '@gmail.com',
                'role_id' => '1',
                'phone' => $faker->phoneNumber,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

            );

            DB::table('admins')->insert($data);
            $data = null;
        }
    }
}
