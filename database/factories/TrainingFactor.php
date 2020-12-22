<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Training;
use Faker\Generator as Faker;

$factory->define(Training::class, function (Faker $faker) {
    $type=['managerial','supervisory','technical'];
    return [
        'name'=> $this->faker->jobTitle,
        'start_date'=> $this->faker->dateTime,
        'end_date'=> $this->faker->dateTime,
        'total_hours'=> $this->faker->randomDigit,
        'type' => $type[array_rand($type)],
        'conductor'=> $this->faker->name
    ];
});
