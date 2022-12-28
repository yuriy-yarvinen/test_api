<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address(),
            'name' => $this->faker->name(),
            'rating' => rand(1,5),
            'genre' => Str::random(10),
            'short_description' =>  $this->faker->text(),
            'type' =>  'type',
            'rev' =>  'rev',
            'image' => $this->faker->imageUrl(600,400, 'food'),
            'lat' => $this->faker->latitude(10,20),
            'latitude' => $this->faker->latitude(10,20),
            'long' => $this->faker->longitude(100,150),
            'longitude' => $this->faker->longitude(100,150),
        ];
    }
}
