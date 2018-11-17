<?php

use App\Models\Slider;
use App\Models\Survey;
use Faker\Generator as Faker;

$factory->define(Survey::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug_ar' => $faker->sentence,
        'slug_en' => $faker->sentence,
        'description_ar' => $faker->paragraph,
        'description_en' => $faker->paragraph,
        'is_home' => $faker->boolean,
        'is_desktop' => $faker->boolean,
        'is_footer' => $faker->boolean,
        'active' => $faker->boolean(true),
        'order' => $faker->numberBetween(1, 99),
    ];
});
