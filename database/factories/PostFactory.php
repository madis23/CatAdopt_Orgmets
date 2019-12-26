<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $created = $faker->dateTimeBetween('-1 year', '-11 days');
    $updated = clone $created;
    $updated->add(DateInterval::createFromDateString('+' . $faker->numberBetween(0, 10) . 'days'));
    return [
        'title' => $faker->sentence(3, true),
        'body' => $faker->paragraphs(2, true),
        'gender' => $faker->randomElement(['Male', 'Female']),
        'breed' => $faker->sentence(2, true),
        'created_at' => $created,
        'updated_at' => $updated
    ];
});

