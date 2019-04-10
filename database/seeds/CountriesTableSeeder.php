<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_ar' => 'kuwait',
                'name_en' => 'kuwait',
                'calling_code' => '00965',
                'country_code' => 'KW',
                'flag' => 'kw-flag.jpg',
                'order' => 1,
                'active' => 1,
                'created_at' => '2019-03-16 16:17:23',
                'updated_at' => '2019-03-16 16:17:23',
            ),
            1 => 
            array (
                'id' => 2,
                'name_ar' => 'الأمريكية',
                'name_en' => 'USA',
                'calling_code' => '001',
                'country_code' => 'USD',
                'flag' => 'usa_flag.jpg',
                'order' => 2,
                'active' => 1,
                'created_at' => '2019-03-16 16:17:23',
                'updated_at' => '2019-04-10 08:36:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name_ar' => 'الإمارات',
                'name_en' => 'United Arab Emirates',
                'calling_code' => '00965',
                'country_code' => 'AED',
                'flag' => 'uae_flag.jpg',
                'order' => 2,
                'active' => 1,
                'created_at' => '2019-03-16 16:17:23',
                'updated_at' => '2019-03-16 16:17:23',
            ),
        ));
        
        
    }
}