<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parents;
use Faker\Generator as Faker;

$factory->define(Parents::class, function (Faker $faker) {
    $gender = $faker->randomElement(["male", "female"]);
    $address = $faker->address();
    return [
        "user_id" => factory(App\User::class),
        "gender" => $gender,
        "phone" => $faker->phoneNumber(),
        "current_address" => $address,
        "permanent_address" => $address,
    ];
});
