<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
            'title_ar' => $faker->sentence(1),
            'title_en' => $faker->sentence(1),
            'content_en' => $faker->paragraph(5),
            'content_ar' => $faker->paragraph(5),
    ];
});
