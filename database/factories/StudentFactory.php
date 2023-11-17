<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    $alamat = $faker->address();
    return [
        "user_id" => factory(App\User::class),
        "parent_id" => factory(App\Parents::class),
        "class_id" => $faker->numberBetween(1,11),
        "roll_number" => $faker->numberBetween(1,11),
        "gender" => $gender,
        "phone" => $faker->phoneNumber(),
        "dateofbirth" => $faker->dateTimeBetween("-20 years", "-17 years"),
        "current_address" => $alamat,
        "permanent_address" => $alamat
    ];
});
