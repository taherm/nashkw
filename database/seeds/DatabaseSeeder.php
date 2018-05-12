<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);

         $this->call(CountriesTableSeeder::class);
         $this->call(ContactusTableSeeder::class);
         $this->call(PoliciesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ColorsTableSeeder::class);
         $this->call(SizesTableSeeder::class);
         $this->call(FaqsTableSeeder::class);

         $this->call(ProductsTableSeeder::class);

    }
}
