<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'path' => 'http://placekitten.com/' . $faker->numberBetween(200,800) . '/' . $faker->numberBetween(200,800),
        'name' => $faker->sentence,
    ];
});

