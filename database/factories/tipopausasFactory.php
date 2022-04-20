<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class tipopausasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcionpausas' => $this->faker->name(),
        ];
    }
}
