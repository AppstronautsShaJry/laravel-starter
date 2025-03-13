<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition(): array
    {
        return [

            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(4),
            'user_id' => $this->faker->numberBetween(1, 10),


        ];
    }
}
