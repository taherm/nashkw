<?php

use App\Models\Setting;
use Faker\Generator as Faker;
$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Setting::class, function (Faker $faker) use($fakerAr) {
    return [
        'company_ar' => $fakerAr->realText(200),
        'company_en' => $faker->name,
        'address_ar' => $fakerAr->realText(100),
        'address_en' => $faker->name,
        'mobile' => $faker->bankAccountNumber,
        'whatsapp' => $faker->bankAccountNumber,
        'phone' => $faker->bankAccountNumber,
        'country_ar' => $fakerAr->realText(20),
        'country_en' => $faker->country,
        'zipcode' => $faker->randomDigit,
        'email' => $faker->email,
        'youtube' => $faker->url,
        'instagram' => $faker->url,
        'twitter' => $faker->url,
        'snapchat' => $faker->url,
        'facebook' => $faker->url,
        'logo' => 'logo.jpg',
        'size_chart' => 'logo.jpg',
//        'shipment_service' => $faker->boolean(true),
//        'delivery_service' => $faker->boolean(false),
//        'delivery_service_cost' => 5,
//        'delivery_service_minimum_charge' => 100
    ];
});
