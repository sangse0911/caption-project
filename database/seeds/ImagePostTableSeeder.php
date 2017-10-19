<?php

use Illuminate\Database\Seeder;

class ImagePostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('image_posts')->delete();

        for ($i = 0; $i < 20; $i++) {
            $data = array(
                'post_id' => ($i + 1),
                'path' => '2461508266361-2.jpg',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            );
            DB::table('image_posts')->insert($data);
            $data = null;
        }
    }
}
