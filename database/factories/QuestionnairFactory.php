<?php

use App\Models\Questionnaire;
use Faker\Generator as Faker;

$factory->define(Questionnaire::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
    ];
});
