<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2,100000,10000000),
            'title' => $this->faker->text(200),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(500),
            'construction_year' => $this->faker->year(),
            'rooms' => $this->faker->randomDigit(),
        ];
    }
}
