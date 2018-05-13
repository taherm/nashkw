<?php

use App\Models\Coupon;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Coupon::class, function (Faker $faker) {
    return [
        'value' => $faker->randomDigit,
        'is_percentage' => $faker->boolean,
        'customer_id' => User::all()->random()->id,
        'active' => $faker->boolean,
        'consumed' => $faker->boolean,
        'code' => $faker->numberBetween(999999, 99999999999),
        'minimum_charge' => $faker->randomDigit,
    ];
});
