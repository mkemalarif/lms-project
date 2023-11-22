<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "username" => $faker->userName,
        "email" => $faker->unique()->safeEmail,
        "password" => bcrypt("password"),
        "created_at" => date("d-m-Y"),
    ];
});
// $factory->state(App\User::class, 'teacher', [
//     // Definisi atribut-atribut tambahan jika diperlukan.
// ]);
$factory->state(App\User::class, 'parent', [
    // Definisi atribut-atribut tambahan jika diperlukan.
]);
