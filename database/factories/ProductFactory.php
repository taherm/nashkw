<?php

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'sku' => $faker->postcode,
        'active' => $faker->boolean,
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'weight' => $faker->randomDigit,
        'home_delivery_availability' => $faker->boolean,
        'shipment_availability' => $faker->boolean,
        'on_sale' => $faker->boolean,
        'on_sale_on_homepage' => $faker->boolean,
        'on_homepage' => $faker->boolean,
        'price' => $faker->randomFloat(3, 10, 200),
        'sale_price' => function ($array) {
            return $array['price'] - rand(1, 5);
        },
        'home_delivery_fees' => $faker->boolean,
        'size_chart_image' => $faker->numberBetween(1, 10) . '.jpg',
        'description_en' => $faker->paragraph,
        'description_ar' => $faker->paragraph,
        'notes_ar' => $faker->paragraph,
        'notes_en' => $faker->paragraph,
        'image' => $faker->numberBetween(1, 10) . '.jpg',
        'start_sale' => $faker->dateTime('now'),
        'end_sale' => $faker->dateTimeBetween('now', '1 year'),
    ];
});
