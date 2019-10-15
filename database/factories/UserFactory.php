<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Post;
use App\User;
use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id' => function(){
            return factory(Category::class)->create()->id;
        },
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
        'title'=> $faker->sentence,
        'description'=> $faker->paragraph,
        'photo'=> $faker->imageUrl,

    ];
});

