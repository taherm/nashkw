<?php

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {

    return [
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'order' => $faker->numberBetween(1, 99),
        'description_en' => $faker->paragraph(1),
        'description_ar' => $faker->paragraph(1),
        'image' => $faker->numberBetween(1, 10) . '.jpg',
        'limited' => $faker->numberBetween(0, 1),
        'parent_id' => Category::where('parent_id', 0)->pluck('id')->shuffle()->first(),
        'is_home' => $faker->boolean
    ];
});