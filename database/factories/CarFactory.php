<?php

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

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->company,
        'model' => $faker->word,
        'year' => $faker->year($max = 'now'),
        'maxSpeed' => $faker->numberBetween($min = 100, $max = 300),
        'isAutomatic' => $faker->boolean($chanceOfGettingTrue = 50),
        'engine' => $faker->word,
        'numberOfDoors' => $faker->numberBetween($min = 3, $max = 5)
    ];
});
