<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parents;
use Faker\Generator as Faker;

$factory->define(Parents::class, function (Faker $faker) {
    $gender = $faker->randomElement(["male", "female"]);
    $address = $faker->address();
    return [
        "user_id" => factory(App\User::class)->create()->id,
        "gender" => $gender,
        "phone" => $faker->phoneNumber(),
        "current_address" => $address,
        "permanent_address" => $address,
    ];
});
$factory->state(Parents::class, 'withRole', [])->afterCreatingState(Parents::class, 'withRole', function ($parents) {
    $parents->user->update([
        "username" => "parent" . $parents->id,
    ]);
    $parents->user->assignRole('Parent');
});
