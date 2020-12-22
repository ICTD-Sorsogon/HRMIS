<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Education;
use Faker\Generator as Faker;

$factory->define(Education::class, function (Faker $faker) {
    $level = ['elementary','secondary','vocational', 'college', 'graduate_studied'];
    return [
        'level' => $level[array_rand($level)], 
        'name' => $this->faker->company,
        'track' => $this->faker->jobTitle,
        'start_date' => $this->faker->dateTime,
        'end_date' => $this->faker->dateTime,
        'attainment' => $this->faker->jobTitle,
        'year_graduated' => $this->faker->year,
        'awards' => $this->faker->jobTitle
    ];
});
