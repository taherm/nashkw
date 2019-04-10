<?php

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('currencies')->delete();
        
        \DB::table('currencies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_ar' => 'دينار كويتي',
                'name_en' => 'Kuwait Dinar',
                'currency_symbol_ar' => 'د.ك',
                'currency_symbol_en' => 'KWD',
                'exchange_rate' => 1.0,
                'active' => 1,
                'country_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-03-16 16:17:23',
                'updated_at' => '2019-03-16 16:17:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name_ar' => 'الدولار الأمريكي',
                'name_en' => 'USD',
                'currency_symbol_ar' => '$',
                'currency_symbol_en' => 'USD',
                'exchange_rate' => 0.3,
                'active' => 1,
                'country_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2019-03-16 16:17:24',
                'updated_at' => '2019-04-10 08:38:05',
            ),
            2 => 
            array (
                'id' => 3,
                'name_ar' => 'درهم إماراتي',
                'name_en' => 'AED',
                'currency_symbol_ar' => 'د.إ',
                'currency_symbol_en' => 'AED',
                'exchange_rate' => 0.7,
                'active' => 0,
                'country_id' => 3,
                'remember_token' => NULL,
                'created_at' => '2019-03-16 16:17:24',
                'updated_at' => '2019-04-10 08:38:31',
            ),
        ));
        
        
    }
}