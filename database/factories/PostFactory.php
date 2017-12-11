<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(3),
        'user_id'=>  \App\User::inRandomOrder()->pluck('id')->first(),
        'body'=>$faker->realText()
    ];
});
