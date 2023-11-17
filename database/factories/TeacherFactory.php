<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Teacher;
use Faker\Generator as Faker;

$factory->define(Teacher::class, function (Faker $faker) {
    $alamat = $faker->address;
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'user_id' => factory(App\User::class),
        'gender' => $gender,
        "phone" => $faker->phoneNumber,
        "dateofbirth" => $faker->dateTimeBetween("-50 years", "-30 years"),
        "current_address" => $alamat,
        "permanent_address" => $alamat,
        "created_at" => date("d-m-Y"),
    ];
});
