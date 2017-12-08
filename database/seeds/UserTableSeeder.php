<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $data = array(
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'password' => bcrypt('123'),
                'phone' => $faker->e164PhoneNumber,
                'status' => '1',
                'balance' => 0,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );
            DB::table('users')->insert($data);
            $data = null;
        }
    }
}
