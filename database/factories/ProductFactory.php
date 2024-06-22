<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => 200,
            'description' => $this->faker->text(200),
            'thumbnail' => "https://picsum.photos/550/600",
            'slug' => $this->faker-> word
        ];
    }
}
