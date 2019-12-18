<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Nawal',
                'email' => 'nawal@gmail.com',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
                'mobile' => '064182249560',
                'avatar' => '4.jpg',
                'phone' => '57751715957',
                'address' => 'Kuwait City',
                'area' => 'Kuwait City',
                'block' => '1',
                'street' => 'Kuwait City',
                'building' => '4',
                'floor' => '3',
                'apartment' => 'Kuwait City',
                'country' => 'Kuwait',
                'active' => 1,
                'api_token' => '5187827',
                'remember_token' => 'XpIrymdUs6',
                'deleted_at' => NULL,
                'created_at' => '2019-12-14 15:42:21',
                'updated_at' => '2019-12-14 15:42:21',
            ),
        ));
    }
}
