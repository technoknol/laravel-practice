<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $name = ''; // = $faker->words(2);
    return [
        'name' => $name ?: $name = $faker->sentence(2),
        'slug' => str_slug($name)
    ];
});
