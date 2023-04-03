<?php

namespace Database\Factories\hospitals;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

class PatientFactory extends Factory
{
    use WithFaker;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'post_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'birth_place' => $this->faker()->word(),
            'birth_date' =>  $this->faker->date(),
            'gender' => $this->faker->randomElement([0, 1]),
            'martital_status' => $this->faker->randomElement(['Bachelor', 'Married', 'Divorced', 'Widowed']),
            'father_name' => $this->faker->firstNameMale(),
            'mother_name' => $this->faker->firstNameFemale(),
            'relative' => $this->faker->name(),
            'nationality' => $this->faker->word(),
            'country' => $this->faker->country(),
            'province' => $this->faker->word(),
            'municipality' => $this->faker->word(),
            'town' => $this->faker->city(),
            'neighborhood' => $this->faker->word(),
            'avenue' => $this->faker->randomNumber(),
            'house_number' => $this->faker->randomNumber(),
            'profession' => $this->faker->word(),
            'phone_number' => $this->faker->phoneNumber()
        ];
    }
}
