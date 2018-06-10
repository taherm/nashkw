<?php

use App\Models\Country;
use App\Models\Currency;
use Faker\Generator as Faker;

$factory->define(Currency::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'symbol' => $faker->countryISOAlpha3,
        'code' => $faker->countryISOAlpha3,
        'active' => $faker->boolean(true),
        'exchange_rate' => $faker->name,
        'active' => $faker->boolean(true),
        'country_id' => Country::doesntHave('currency')->first()->id,
    ];
});
