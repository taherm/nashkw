<?php

use App\Model\Aboutus;
use Illuminate\Database\Seeder;

class AboutusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Aboutus::class,app()->environment('production') ? 1 : 5)->create();
    }
}
