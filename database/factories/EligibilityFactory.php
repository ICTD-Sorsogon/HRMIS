<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Eligibility;
use Faker\Generator as Faker;

$factory->define(Eligibility::class, function (Faker $faker) {
    return [
        'eligibility' => $this->faker->jobTitle,
        'rating' => $this->faker->randomDigit,
        'exam_date' => $this->faker->dateTime,
        'place' => $this->faker->address,
        'validity' => $this->faker->dateTime,
        'number' => $this->faker->randomDigit,
        'index' => $this->faker->randomDigit
    ];
});
