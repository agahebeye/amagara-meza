<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Modules\Medic\Medic;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'ref' => Str::random(5),
            'category' => $this->faker->randomElement(['tablet', 'blister', 'injectable']),
            'qty' => $this->faker->numberBetween(1, 50),
            'expiredAt' => $this->faker->dateTimeBetween('-1year')
        ];
    }
}
