<?php

use App\Models\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'title_ar' => $faker->name,
        'title_en' => $faker->name,
        'slug_ar' => $faker->name,
        'slug_en' => $faker->name,
        'image' => $faker->numberBetween(1, 10) . '.jpeg',
        'content_ar' => $faker->paragraph,
        'url' => $faker->url,
        'content_en' => $faker->paragraph,
        'order' => $faker->numberBetween(1, 10),
        'active' => $faker->boolean,
        'on_footer' => $faker->boolean,
        'on_menu_desktop' => $faker->boolean,
        'on_menu_mobile' => $faker->boolean,
    ];
});
