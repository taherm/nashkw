<?php

use App\Models\Contactus;
use Faker\Generator as Faker;

$factory->define(Contactus::class, function (Faker $faker) {
    return [
        'company_ar' => $faker->name,
        'company_en' => $faker->name,
        'address_ar' => $faker->name,
        'address_en' => $faker->name,
        'mobile' => $faker->bankAccountNumber,
        'phone' => $faker->bankAccountNumber,
        'country_ar' => $faker->country,
        'country_en' => $faker->country,
        'zipcode' => $faker->randomDigit,
        'email' => $faker->email,
        'youtube' => $faker->url,
        'instagram' => $faker->url,
        'twitter' => $faker->name,
        'logo' => $faker->numberBetween(1, 10) . '.jpg',
    ];
});
