<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IntraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(3),
            'qty' => $this->faker->numberBetween(7, 20),
        ];
    }
}
