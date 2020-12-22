<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WorkExperience;
use Faker\Generator as Faker;

$factory->define(WorkExperience::class, function (Faker $faker) {
    $appointment = ['Temporary', 'Co-Terms', 'Permanent', 'Promotion'];
    return [
        'start_date' => $this->faker->dateTime,
        'end_date' => $this->faker->dateTime,
        'position' => $this->faker->jobTitle,
        'company' => $this->faker->company,
        'salary' => $this->faker->numberBetween(5000, 50000),
        'appointment' => $appointment[array_rand($appointment)],
        'government_service' => (bool)random_int(0, 1),
        'description' => $this->faker->word,
        'office' => $this->faker->company,
        'supervisor_first_name' => $this->faker->firstName,
        'supervisor_middle_name' => $this->faker->lastName,
        'supervisor_last_name' => $this->faker->lastName
    ];
});
