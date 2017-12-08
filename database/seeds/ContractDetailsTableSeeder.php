<?php

use Illuminate\Database\Seeder;

class ContractDetailsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contract_details')->delete();

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 51; $i++) {
            $data = array(
                'contract_id' => $i,
                'book_id' => $i,
                'price' => rand(10000, 100000),
                'quality' => rand(1, 2),
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );

            DB::table('contract_details')->insert($data);
            $data = null;
        }
    }
}
