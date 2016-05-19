<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'language_id' => rand(1, 3),
        'user_id' => 1,
        'article_category_id' => rand(1, 2),
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'introduction' => $faker->paragraph,
        'content' => $faker->text,
        'source' => $faker->url,
    ];
});

$factory->define(App\ArticleCategory::class, function (Faker\Generator $faker) {
    return [
        'language_id' => rand(1, 3),
        'user_id' => 1,
        'title' => $faker->sentence,
        'slug' => $faker->slug,
    ];
});

$factory->define(App\Procedure::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'category' => $faker->word,
        'description' => $faker->paragraph,
        'image' => $faker->url,
    ];
});

$factory->define(App\ProcedureCategory::class, function (Faker\Generator $faker) {
    return [
        'category' => $faker->word,
        'description_short' => $faker->paragraph,
        'description_long' => $faker->paragraph,
        'image' => $faker->url,
    ];
});
