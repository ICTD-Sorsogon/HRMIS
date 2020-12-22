<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\VoluntaryWork;
use Faker\Generator as Faker;

$factory->define(VoluntaryWork::class, function (Faker $faker) {
    return [
        'name' => $this->faker->company,
        'start_date' => $this->faker->dateTime,
        'end_date' => $this->faker->dateTime,
        'total_hours' => $this->faker->randomDigit,
        'position' => $this->faker->jobTitle
    ];
});
