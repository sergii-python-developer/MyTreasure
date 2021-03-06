<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;


$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->text(200),
        'image' => $faker->image('public/storage/articles/images', 1200, 800, null, false),
    ];
});
