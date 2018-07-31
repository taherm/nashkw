<?php

use App\Models\Branch;
use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'address_ar' => $faker->address,
        'address_en' => $faker->address,
        'phone' => $faker->bankAccountNumber,
        'country_id' => Country::all()->random()->id
    ];
});
