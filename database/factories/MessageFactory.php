<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'sent_at' => $this->faker->date(),
            'sent_by' => $this->faker->numberBetween(1, 10)
        ];
    }
}
