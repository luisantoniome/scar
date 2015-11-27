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

$factory->define(Scar\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->lastName,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10)
    ];
});

$factory->define(Scar\Order::class, function (Faker\Generator $faker) {
    return [
        'date'  => $faker->dateTime,
        'table_number' => $faker->randomDigit,
        'total' => $faker->randomFloat
    ];
});
