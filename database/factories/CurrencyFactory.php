<?php

use App\Models\Currency;
use Faker\Generator as Faker;

$factory->define(Currency::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'code' => $faker->name,
        'symbol' => $faker->name,
        'format' => $faker->name,
        'exchange_rate' => $faker->name,
        'active' => $faker->name,
        'country_id' => $faker->name,
    ];
});
