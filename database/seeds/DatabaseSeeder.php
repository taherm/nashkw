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
        $this->call(CategoriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        /* 
       
        
        $this->call(PoliciesTableSeeder::class);
       
        $this->call(ColorsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        
        $this->call(TermsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(NewslettersTableSeeder::class);
        
        $this->call(ShipmentPackgesTableSeeder::class);

        
        $this->call(ProductsTableSeeder::class);
        $this->call(CouponsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(AboutusTableSeeder::class);
        $this->call(SurveysTableSeeder::class);
        $this->call(QuestionnairesTableSeeder::class);
*/
    }
}
