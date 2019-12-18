<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'company_ar' => 'ناش',
                'company_en' => 'NashKw',
                'address_ar' => 'Kuwait City',
                'address_en' => 'Kuwait City',
                'mobile' => NULL,
                'phone' => NULL,
                'country_ar' => 'Kuwait',
                'country_en' => 'Kuwait',
                'zipcode' => 0,
                'email' => 'Nawal@gmail.com',
                'youtube' => NULL,
                'instagram' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'whatsapp' => NULL,
                'snapchat' => NULL,
                'logo' => 'UH2xBWZmbH2qU4qBY5htB3nyJwDfk6CD8pXIBLF6.jpeg',
                'size_chart' => 'logo.jpg',
                'created_at' => '2019-12-18 08:34:33',
                'updated_at' => '2019-12-18 10:35:29',
                'longitude' => NULL,
                'latitude' => NULL,
                'code' => NULL,
            ),
        ));
        
        
    }
}