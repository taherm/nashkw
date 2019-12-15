<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('branches')->delete();

        \DB::table('branches')->insert(array(

            0 =>
            array(
                'id' => 1,
                'name_ar' => 'ناش- العقيلة - سما مول',
                'name_en' => 'NASH- Al Ogaila - Sama Mall ( Fives_KW )',
                'address_ar' => 'العقيلة - سما مول',
                'address_en' => 'Al Ogaila - Sama Mall ( Fives_KW )',
                'phone' => '+965 98087700',
                'active' => 1,
                'country_id' => 1,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-08 17:38:45',
                'longitude' => NULL,
                'latitude' => NULL,
            )

        ));
    }
}
