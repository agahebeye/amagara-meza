<?php

namespace App\Modules\Service;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word(),
            'category' => $this->faker->randomElement(array('Consultation', 'Laboratory', 'Imaging')),
            'price' => $this->faker->randomFloat(11, 10_000, 100_000)
        ];
    }
}
