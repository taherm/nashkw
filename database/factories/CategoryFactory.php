<?php

use App\Models\Category;
use Faker\Generator as Faker;
$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Category::class, function (Faker $faker) use($fakerAr) {

    return [
        'name_ar' => $fakerAr->realText(20),
        'name_en' => $faker->name,
        'caption_ar' => $fakerAr->realText(50),
        'caption_en' => $faker->name,
        'order' => $faker->numberBetween(1, 99),
        'description_en' => $faker->paragraph(1),
        'description_ar' => $fakerAr->realText(100),
        'image' => $faker->numberBetween(1, 42) . '.jpeg',
        'limited' => $faker->numberBetween(0, 1),
        'parent_id' => Category::where('parent_id', 0)->pluck('id')->shuffle()->first(),
        'is_home' => $faker->boolean,
        'is_featured' => $faker->boolean
    ];
});