<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Popular;
use Faker\Generator as Faker;

$factory->define(Popular::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'content' => $faker->sentence(),
        'ingredient' => $faker->sentence(),
        'method' => $faker->sentence(),
        'featured_image' => Str::random(10),
    ];
});
