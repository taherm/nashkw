<?php

use App\Models\Order;
use App\Models\OrderMeta;
use App\Models\Product;
use App\Models\ProductAttribute;
use Faker\Generator as Faker;

$factory->define(OrderMeta::class, function (Faker $faker) {
    return [
        'order_id' => Order::all()->random()->id,
        'product_id' => Product::all()->random()->id,
        'product_attribute_id' => function ($array) {
            return ProductAttribute::where('product_id', $array['product_id'])->get()->random()->id;
        },
        'quantity' => $faker->numberBetween(1, 3),
        'price' => function ($array) {
            return Product::whereId($array['product_id'])->first()->price;
        },
        'on_sale' => function ($array) {
            return Product::whereId($array['product_id'])->first()->on_sale;
        },
        'sale_price' => function ($array) {
            return Product::whereId($array['product_id'])->first()->sale_price;
        },
        'shipping_cost' => $faker->numberBetween(1, 3)
    ];
});
