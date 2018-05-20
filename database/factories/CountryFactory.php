<?php

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'flag' => $faker->numberBetween(1, 10) . '.jpg',
        'order' => $faker->randomDigit,
        'code' => $faker->countryCode
    ];
});
