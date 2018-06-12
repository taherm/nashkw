<?php

use App\Models\Country;
use App\Models\Order;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => User::all()->random()->id,
        'status' => $faker->randomElement(['pending', 'success', 'failed', 'delivered']),
        'shipping_cost' => $faker->randomDigit,
        'price' => $faker->numberBetween(22, 99),
        'discount' => $faker->numberBetween(10, 22), // discount will be updated if there is a coupon applied.
        'net_price' => function ($array) {
            return $array['price'] - $array['discount'];
        },
        'email' => $faker->email,
        'address' => $faker->address,
        'mobile' => $faker->bankAccountNumber,
        'phone' => $faker->bankAccountNumber,
        'reference_id' => $faker->bankAccountNumber,
        'payment_method' => $faker->randomElement(['cash', 'visa', 'mastercard']),
        'country_id' => Country::all()->random()->id
    ];
});
