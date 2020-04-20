<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Benevolet;
use App\User;
use Faker\Generator as Faker;

$factory->define(Benevolet::class, function (Faker $faker) {
    return [
        'user_id' => User::get('id')->random(),
        'dureeBenevolat' => $faker->date,
        'description' => $faker->sentence,
    ];
});
