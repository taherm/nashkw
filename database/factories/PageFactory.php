<?php

use App\Models\Page;
use Faker\Generator as Faker;
$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Page::class, function (Faker $faker) use($fakerAr) {
    return [
        'title_ar' => $fakerAr->realText(20),
        'title_en' => $faker->name,
        'slug_ar' => $fakerAr->realText(20),
        'slug_en' => $faker->name,
        'image' => $faker->numberBetween(1, 10) . '.jpg',
        'content_ar' => $fakerAr->realText(200),
        'content_en' => $faker->paragraph,
        'url' => $faker->url,
        'order' => $faker->numberBetween(1, 10),
        'active' => $faker->boolean,
        'on_footer' => $faker->boolean,
        'on_menu_desktop' => $faker->boolean,
        'on_menu_mobile' => $faker->boolean,
    ];
});
