<?php

use App\Models\Aboutus;
use Faker\Generator as Faker;

$factory->define(Aboutus::class, function (Faker $faker) {
    return [
        'title_ar' => $faker->name,
        'title_en' => $faker->name,
        'body_ar' => $faker->paragraph,
        'body_en' => $faker->paragraph,
    ];
});
