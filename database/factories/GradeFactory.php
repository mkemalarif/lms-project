<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grade;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    $nomor = $faker->numberBetween(0,10);
    
    $pilihanKelas = [
        "Matematika",
        "Fisika",
        "Kimia",
        "Biologi",
        "Bahasa Indonesia",
        "Bahasa Inggris",
        "Pendidikan Agama Islam",
        "Pendidikan Pancasila",
        "Geografi",
        "Sosiologi",
        "Ekonomi"
    ];
    $nomorKelas = array_rand($pilihanKelas);
    $kelas = $pilihanKelas[$nomorKelas];
    return [
        "teacher_id" => $faker->numberBetween(1,7),
        "class_numeric" => $nomor,
        "class_name" => $kelas,
        "class_description" => $kelas,
    ];
});
