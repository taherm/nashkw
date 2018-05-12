<?php

use App\Models\Gallery;
use App\Models\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'gallery_id' => Gallery::all()->random()->id,
        'thumb_url' => $faker->numberBetween(1, 10) . '.jpeg',
        'medium_url' => $faker->numberBetween(1, 10) . '.jpeg',
        'large_url' => $faker->numberBetween(1, 10) . '.jpeg',
        'caption_en' => $faker->paragraph(1),
        'caption_ar' => $faker->paragraph(1),
    ];
});
