<?php

use App\Models\Color;
use Faker\Generator as Faker;

$factory->define(Color::class, function (Faker $faker) {
    return [
        'name_en' => $faker->unique()->randomElement(['red', 'white', 'orange', 'green', 'none']),
        'name_ar' => function ($array) {
            return $array['name_en'];
        },
        'code' => $faker->hexColor
    ];
});
