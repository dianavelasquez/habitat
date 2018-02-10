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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Cliente::class,function (Faker\generator $faker){
    return [
        'codigo_sim' => random_int(1000, 9999),
        'nombre' => $faker->name,
        'dui' => random_int(0,99999999).'-'.random_int(0,1),
        'nit' => random_int(0,9999).'-'.random_int(0,999999).'-'.random_int(0,999).'-'.random_int(0,1),
        'telefono' => random_int(6000,7999).'-'.random_int(0,9999),
        'direccion' => $faker->address,
        'ubicacion' => $faker->country,
    ];
});