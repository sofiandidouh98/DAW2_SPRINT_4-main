<?php

namespace Database\Factories;

use App\Models\TasksState;
use Illuminate\Database\Eloquent\Factories\Factory;

class TasksStateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state' => $this->faker->word()
        ];
    }
}
