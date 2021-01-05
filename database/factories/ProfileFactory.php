<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    $gender = ['male', 'female'];
    $bloodType = ['A','AB', 'B', 'O'];
    $bloodType = ['A','AB', 'B', 'O'];
    $citizenship = ['filipino', 'american', 'fil-am', 'fil-jap'];
    $civil_status = ['single', 'married', 'widowed','separated','others'];

    return [
        'first_name' => $this->faker->firstName,
		'last_name' => $this->faker->lastName,
        'middle_name' => $this->faker->lastName,
        'weight' => $this->faker->numberBetween(25, 100),
        'height' => $this->faker->randomFloat(null, 1, 2),
        'suffix' => $this->faker->suffix,
        'gender' => $gender[array_rand($gender)],
        'age' => rand(0,100),
        'blood_type' => $bloodType[array_rand($bloodType)],
        'dob' => $this->faker->dateTime(),
        'place_of_birth' => $this->faker->city,
        'tin' => $this->faker->ssn,
        'sss' => $this->faker->ssn,
        'philhealth' => $this->faker->ssn,
        'pag_ibig' => $this->faker->ssn,
        'gsis' => $this->faker->ssn,
        'telephone' => $this->faker->tollFreePhoneNumber,
        'mobile' => $this->faker->e164PhoneNumber,
        'email' => $this->faker->email,
        'citizenship' => $citizenship[array_rand($citizenship)],
        'civil_status' => $civil_status[array_rand($civil_status)],
        'spouse_first_name' => $this->faker->firstName,
        'spouse_middle_name' => $this->faker->lastName,
        'spouse_last_name' => $this->faker->lastName,
        'spouse_occupation' => $this->faker->jobTitle,
        'spouse_employer' => $this->faker->company,
        'spouse_business_address' => $this->faker->address,
        'spouse_contact_number' => $this->faker->phoneNumber,
        'father_last_name' => $this->faker->lastName,
        'father_first_name' => $this->faker->firstName,
        'father_middle_name' => $this->faker->lastName,
        'father_name_extension' => $this->faker->suffix,
        'mother_last_name' => $this->faker->lastName,
        'mother_first_name' => $this->faker->firstName,
        'mother_middle_name' => $this->faker->lastName
    ];
});
