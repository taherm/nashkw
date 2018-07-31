<?php

use App\Models\Setting;
use Faker\Generator as Faker;

$factory->define(Setting::class, function (Faker $faker) {
    return [
        'company_ar' => $faker->name,
        'company_en' => $faker->name,
        'address_ar' => $faker->name,
        'address_en' => $faker->name,
        'mobile' => $faker->bankAccountNumber,
        'whatsapp' => $faker->bankAccountNumber,
        'phone' => $faker->bankAccountNumber,
        'country_ar' => $faker->country,
        'country_en' => $faker->country,
        'zipcode' => $faker->randomDigit,
        'email' => $faker->email,
        'youtube' => $faker->url,
        'instagram' => $faker->url,
        'twitter' => $faker->url,
        'snapchat' => $faker->url,
        'facebook' => $faker->url,
        'logo' => $faker->numberBetween(1, 10) . '.jpg',
        'size_chart' => $faker->numberBetween(1, 10) . '.jpg',
//        'shipment_service' => $faker->boolean(true),
//        'delivery_service' => $faker->boolean(false),
//        'delivery_service_cost' => 5,
//        'delivery_service_minimum_charge' => 100
    ];
});
