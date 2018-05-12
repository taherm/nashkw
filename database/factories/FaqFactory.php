<?php

use App\Src\User\Faq;
use Faker\Generator as Faker;

$factory->define(Faq::class, function (Faker $faker) {
    return [
        'title_ar' => $faker->name,
        'title_en' => $faker->name,
        'body_ar' => $faker->paragraph,
        'body_en' => $faker->paragraph,
    ];
});
