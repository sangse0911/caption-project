<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(BookshelfTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        // $this->call(BooksTableSeeder::class);
        // $this->call(BookCategoriesTableSeeder::class);
        // $this->call(ImagesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        // $this->call(ContractsTableSeeder::class);
        // $this->call(ContractDetailsTableSeeder::class);
    }
}
