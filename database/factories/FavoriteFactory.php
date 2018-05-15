<?php

use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Favorite::class, function (Faker $faker) {
    return [
        'user_id' => User::doesntHave('favorites')->get()->random()->id,
        'product_id' => Product::doesntHave('favorites')->get()->random()->id,
    ];
});

