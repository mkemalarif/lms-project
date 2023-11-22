<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Teacher;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Teacher::class, function (Faker $faker) {
    $alamat = $faker->address;
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'user_id' => factory(App\User::class)->create()->id,
        'gender' => $gender,
        "phone" => $faker->phoneNumber,
        "dateofbirth" => $faker->dateTimeBetween("-50 years", "-30 years"),
        "current_address" => $alamat,
        "permanent_address" => $alamat,
        "created_at" => date("d-m-Y"),
    ];
});
$factory->state(App\Teacher::class, 'withRole', [
])->afterCreatingState(App\Teacher::class, 'withRole', function ($teacher, $faker) {
    // Setelah objek Teacher dibuat, tambahkan role 'Teacher'.
    $teacher->user->update([
        "username" => "teacher" . $teacher->id,
    ]);
    $teacher->user->assignRole('Teacher');
});
