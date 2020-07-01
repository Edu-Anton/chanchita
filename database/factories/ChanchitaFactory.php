<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chanchita;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Chanchita::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'day' => $faker->dateTimeBetween('now', '+1 month'),
        'url_img' => 'https://picsum.photos/200/200',
        'password' => Str::random(8),
        'user_id' => $faker->numberBetween($min = 1, $max = 2)
    ];
});
