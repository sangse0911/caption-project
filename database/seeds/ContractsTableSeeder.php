<?php

use Illuminate\Database\Seeder;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contracts')->delete();

        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $data = array(
                [
                    'user_id' => rand(2, 20),
                    'admin_id' => rand(1, 5),
                    'method' => rand(0, 1), //tien mat or the
                    'account' => $faker->creditCardNumber,
                    'kind' => '0', //sach ban hay sach thue
                    'status' => '1', //hop dong do ai tao
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'user_id' => rand(2, 20),
                    'admin_id' => rand(1, 5),
                    'method' => rand(0, 1), //tien mat or the
                    'account' => $faker->creditCardNumber,
                    'kind' => '1', //sach ban hay sach thue
                    'status' => '1', //hop dong do ai tao
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'user_id' => '1',
                    'admin_id' => rand(1, 5),
                    'method' => rand(0, 1),
                    'account' => $faker->creditCardNumber,
                    'kind' => '0',
                    'status' => '0',
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'user_id' => '1',
                    'admin_id' => rand(1, 5),
                    'method' => rand(0, 1),
                    'account' => $faker->creditCardNumber,
                    'kind' => '1',
                    'status' => '0',
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
                [
                    'user_id' => rand(2, 20),
                    'admin_id' => rand(1, 5),
                    'method' => rand(0, 1),
                    'account' => $faker->creditCardNumber,
                    'kind' => rand(0, 1),
                    'status' => '2',
                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ],
            );

            DB::table('contracts')->insert($data);
            $data = null;
        }
    }
}
