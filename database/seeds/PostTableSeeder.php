<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();

        for ($i = 0; $i < 20; $i++) {
            $data = array(
                'name' => 'aaaaaaa',
                'introduce' => 'bbbbbbb',
                'description' => 'cccccccccccccccc',
                'status' => '1',
                'user_id' => '2',
                'author' => 'dddddddddddddddd',
                'company' => 'eeeeeeeeeeeeee',
                'year' => '3',
                'republish' => '30',
                'isbn' => 'ggggggggggggg',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );
            DB::table('posts')->insert($data);
            $data = null;
        }
    }
}
