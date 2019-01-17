<?php

use App\Models\Slider;
use Faker\Generator as Faker;
$fakerAr = \Faker\Factory::create('ar_JO');
$factory->define(Slider::class, function (Faker $faker) use($fakerAr) {
    return [
        'image' => $faker->numberBetween(43, 49) . '.jpg',
        'url' => $faker->url,
        'caption_en' => $faker->name,
        'caption_ar' => $fakerAr->realText(100),
        'active' => $faker->boolean,
        'order' => $faker->numberBetween(1,10),
    ];
});
