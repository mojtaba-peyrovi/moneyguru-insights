<?php

use Faker\Generator as Faker;
use App\Chart;

$factory->define(Chart::class, function (Faker $faker) {
    return [
        'day' => $faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday']),
        'price' => $faker->numberBetween($min = 1000, $max = 15000)
    ];
});
