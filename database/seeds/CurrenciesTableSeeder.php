<?php

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
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
            factory(Currency::class)->create(
                [
                    'symbol' => $country['symbol'],
                    'exchange_rate' => $country['exchange_rate']
                ]
            );
        }
    }
}
