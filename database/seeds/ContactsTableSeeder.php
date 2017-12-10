<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();

        $faker = Faker\Factory::create();

        $data = array(
            [
                'admin_id' => 1,
                'phone' => $faker->e164PhoneNumber,
                'email' => $faker->freeEmail,
                'address' => $faker->city,
                'account' => $faker->bankAccountNumber,
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ],
        );
        DB::table('contacts')->insert($data);
        $data = null;
    }
}
