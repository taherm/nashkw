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

         $this->call(CountriesTableSeeder::class);
         $this->call(ContactusTableSeeder::class);
         $this->call(PoliciesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ColorsTableSeeder::class);
         $this->call(SizesTableSeeder::class);
         $this->call(FaqsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(NewslettersTableSeeder::class);

        $this->call(UsersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
         $this->call(FavoritesTableSeeder::class);
         $this->call(TagsTableSeeder::class);


    }
}