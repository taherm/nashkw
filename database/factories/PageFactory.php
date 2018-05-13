<?php

use App\Models\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'title_ar' => $faker->name,
        'title_en' => $faker->name,
        'image' => $faker->numberBetween(1, 10) . '.jpeg',
        'content_ar' => $faker->paragraph,
        'content_en' => $faker->paragraph,
        'active' => $faker->boolean,
        'order' => $faker->numberBetween(1, 10),
    ];
});
