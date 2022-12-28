<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DisheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(10),
            'restaurant_id' => rand(1,10),
            'price' => rand(10,100),
            'short_description' =>  $this->faker->text(),
            'image' => $this->faker->imageUrl(600,400, 'dishe'),
        ];
    }
}
