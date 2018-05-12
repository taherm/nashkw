<?php

use App\Models\Gallery;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Gallery::class, function (Faker $faker) {
    return [
        'galleryable_id' => Product::withoutGlobalScopes()->whereDoesntHave('gallery')->pluck('id')->unique()->shuffle()->first(),
        'galleryable_type' => $faker->randomElement(['App\Src\Product\Product']),
        'description_ar' => $faker->paragraph(2),
        'description_en' => $faker->paragraph(2),
    ];
});
