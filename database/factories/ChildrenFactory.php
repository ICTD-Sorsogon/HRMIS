<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Children;
use Faker\Generator as Faker;

$factory->define(Children::class, function (Faker $faker) {
    return [
        'first_name' => $this->faker->firstName,
        'last_name' => $this->faker->lastName,
        'middle_name' => $this->faker->lastName,
        'dob' => $this->faker->dateTime
    ];
});
