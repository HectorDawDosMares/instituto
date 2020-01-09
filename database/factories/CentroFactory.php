<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Centro;
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

$factory->define(Centro::class, function (Faker $faker) {
    return [
        'codigo' => $faker->unique()->randomNumber;
        'nombre' => $faker->company;
        'web' => $faker->url;
        'verificado' => $faker->boolean($chanceOfGettingTrue = 80);
    ];
});
