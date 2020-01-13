<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Materiaimpartida;
use Faker\Generator as Faker;

$factory->define(Materiaimpartida::class, function (Faker $faker) {
    return [
        'docente' => $faker->unique()->randomNumber,
        'grupo' => $faker->unique()->randomNumber,
        'materia' => $faker->unique()->randomNumber
    ];
});
