<?php

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        // 'user_id' => function() {
        //     return App\User::inRandomOrder()->first()->id;
        // },
        // 'category_id' => function() {
        //     return App\Category::inRandomOrder()->first()->id;
        // },
        // 'user_id'     => null,
        // 'category_id' => null,
        'title'       => $faker->sentence,
        'body'        => $faker->paragraph,
    ];
});
