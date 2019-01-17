<?php

use App\Models\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(User::class, function (Faker $faker) use($fakerAr){
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'mobile' => $faker->bankAccountNumber,
        'phone' => $faker->bankAccountNumber,
        'avatar' => $faker->numberBetween(1, 10) . '.jpg',
        'phone' => $faker->bankAccountNumber,
        'address' => $faker->address,
        'area' => $faker->streetName,
        'block' => $faker->randomDigit,
        'street' => $faker->streetName,
        'building' => $faker->randomDigit,
        'floor' => $faker->randomDigit,
        'apartment' => $faker->name,
        'country' => $faker->country,
        'api_token' => $faker->bankAccountNumber,
    ];
});
