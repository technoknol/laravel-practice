<?php

use App\Comment;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $comment = Comment::inRandomOrder()->pluck('id')->first();
    return [
        'user_id' => User::inRandomOrder()->pluck('id')->first(),
        'post_id' => Post::inRandomOrder()->pluck('id')->first(),
        'body' => $faker->realText(),
        'parent_id' => $comment ?: 0
    ];
});
