<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\customer::class, function (Faker $faker) {
    return [
        'nama_customer' => $faker->name,
        'username' => $faker->userName,
        'password' => $faker->password,
        'no_hp' => $faker->phoneNumber,
    ];
});
