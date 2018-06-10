<?php

use App\Models\Area;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Governate;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = config('countries');
        foreach ($countries as $country) {
            factory(Country::class)->create(
                [
                    'name_ar' => $country['name_ar'],
                    'name_en' => $country['name_en'],
                    'country_iso_alpha3' => $country['country_iso_alpha3'],
                ]
            );
        }
    }
}
