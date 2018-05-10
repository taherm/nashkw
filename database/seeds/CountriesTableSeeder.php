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
        foreach($countries as $country) {
            factory(Country::class, app()->environment('production') ? 2 : 2)->create(
                [
                    'name_ar' => $country['name_ar'],
                    'name_en' => $country['name_en'],
                    'code' => $country['code'],
                ]
            )->each(function ($c) use ($country) {
                $c->currency()->save(factory(Currency::class)->create(
                    [
                        'symbol' => $country['symbol'],
                        'exchange_rate' => $country['exchange_rate']
                    ]
                ));
            });
        }
    }
}
