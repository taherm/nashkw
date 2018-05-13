<?php

use App\Models\Country;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'status' => $faker->randomElement(['pending', 'success', 'failed','delivered']),
//        'coupon_id' => Coupon::all()->random()->id,
        'country_id' => Country::all()->random()->id,
        'coupon_value' => $faker->randomDigit,
        'shipping_cost' => $faker->randomDigit,
        'amount' => $faker->numberBetween(22, 99),
        'sale_amount' => $faker->numberBetween(10, 22),
        'net_amount' => function ($array) {
            return $array['amount'] - $array['sale_amount'];
        },
        'email' => $faker->email,
        'address' => $faker->address,
        'mobile' => $faker->bankAccountNumber,
        'phone' => $faker->bankAccountNumber,
        'reference_id' => $faker->bankAccountNumber,
        'payment_method' => $faker->randomElement(['cash', 'tap']),
    ];
});
