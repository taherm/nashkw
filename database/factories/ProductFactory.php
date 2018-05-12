<?php

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'sku' => $faker->name,
        'active' => $faker->boolean,
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'home_delivery_availability' => $faker->boolean,
        'shipment_availability' => $faker->boolean,
        'on_sale' => $faker->boolean,
        'on_sale_on_homepage' => $faker->boolean,
        'on_homepage' => $faker->boolean,
        'price' => $faker->randomFloat(3, 10, 200),
        'sale_price' => function ($array) {
            return $array['price'] - rand(10, 22);
        },
        'home_delivery_fees' => $faker->randomFloat(3, 10, 15),
        'size_chart_image' => $faker->numberBetween(1, 10) . '.jpeg',
        'description_en' => $faker->name,
        'description_ar' => $faker->name,
        'notes_ar' => $faker->name,
        'notes_en' => $faker->name,
        'image' => $faker->numberBetween(1, 10) . '.jpeg',
        'start_sale' => $faker->name,
        'end_sale' => $faker->name,
    ];
});
