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
        
        \DB::table('branches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name_ar' => 'Pink Gusikowski',
                'name_en' => 'Irving Greenholt',
                'address_ar' => '7832 Sharon Run Suite 098
Mayertfurt, OH 28438-1513',
                'address_en' => '4911 Collier Path
North Pierceshire, FL 95669',
                'phone' => '54131559705',
                'active' => 0,
                'country_id' => 3,
                'created_at' => '2019-03-16 16:17:35',
                'updated_at' => '2019-04-01 17:04:21',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name_ar' => 'Bernadine Dare V',
                'name_en' => 'Grady Wilderman II',
                'address_ar' => '17390 Mraz Lock
New Zachary, KS 60509',
                'address_en' => '6593 Bartoletti Road Suite 774
East Benjaminmouth, ID 83877',
                'phone' => '337837372905',
                'active' => 0,
                'country_id' => 2,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:06:32',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name_ar' => 'Dr. Federico Jerde',
                'name_en' => 'Alberto Halvorson',
                'address_ar' => '54621 Boehm Knoll Suite 904
Gideonmouth, CA 35838',
                'address_en' => '8760 Schmeler Trail Suite 823
West Coralie, VT 97277-2344',
                'phone' => '791621871',
                'active' => 0,
                'country_id' => 3,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:06:36',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name_ar' => 'Sabrina Bahringer',
                'name_en' => 'Dr. Nelson Lang',
                'address_ar' => '7963 Porter Common
South Havenburgh, TN 32176',
                'address_en' => '51088 Katelynn Wells
Robelfort, KS 20920-5282',
                'phone' => '13651724108',
                'active' => 0,
                'country_id' => 2,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:06:41',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name_ar' => 'Dr. Lacy VonRueden DDS',
                'name_en' => 'Celestine Dibbert',
                'address_ar' => '4571 Lebsack Stravenue Suite 489
East Luigi, NH 38053-5063',
                'address_en' => '956 Carol Plains Apt. 449
South Bertfurt, CA 86430-7815',
                'phone' => '2855411421710',
                'active' => 0,
                'country_id' => 2,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:06:28',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
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
            ),
            6 => 
            array (
                'id' => 7,
                'name_ar' => 'Brady Murray V',
                'name_en' => 'Kendrick Rippin',
                'address_ar' => '87686 Konopelski Avenue Apt. 116
North Arjun, IA 19230-4962',
                'address_en' => '32867 Huels Expressway Suite 795
Weberborough, NM 22198',
                'phone' => '22062602977984',
                'active' => 0,
                'country_id' => 2,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:04:00',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name_ar' => 'Bonnie Schamberger',
                'name_en' => 'Payton Donnelly',
                'address_ar' => '15215 Dino Prairie
Lake Lacey, DC 60868',
                'address_en' => '491 Edna Forks Apt. 947
Port Jaimeborough, TX 89631',
                'phone' => '992795429771',
                'active' => 0,
                'country_id' => 2,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:04:06',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name_ar' => 'Ted Kiehn',
                'name_en' => 'Barney Erdman',
                'address_ar' => '3919 Scot Crest Apt. 161
Enosview, MD 72535',
                'address_en' => '33643 Bayer Lights
East Virgilside, NE 52369',
                'phone' => '67074901317573',
                'active' => 0,
                'country_id' => 1,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:04:12',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name_ar' => 'Cordell Price',
                'name_en' => 'Chance McCullough DVM',
                'address_ar' => '85853 Frances Stravenue
New Mckenzie, WY 52276-0866',
                'address_en' => '8837 Audrey Groves
Douglastown, KS 16771',
                'phone' => '73529660770',
                'active' => 0,
                'country_id' => 3,
                'created_at' => '2019-03-16 16:17:36',
                'updated_at' => '2019-04-01 17:04:17',
                'longitude' => NULL,
                'latitude' => NULL,
            ),
        ));
        
        
    }
}