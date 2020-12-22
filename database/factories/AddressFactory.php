<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'permanent' => (bool)random_int(0, 1),
        'house_number' => $this->faker->buildingNumber,
        'street' => $this->faker->streetName,
        'subdivision'  => $this->faker->secondaryAddress,
        'barangay'  => $this->faker->secondaryAddress,
        'municipality'  => $this->faker->city,
        'province'  => $this->faker->state,
        'zip_code'  => $this->faker->postcode
    ];
});
