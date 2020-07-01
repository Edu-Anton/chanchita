<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 500),
    ];
});
