<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Task::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-10 days'),
            'start_date' => $this->faker->dateTimeBetween('-1 year', '-10 days'),
            'end_date' => $this->faker->dateTimeBetween('-1 year', '-10 days'),
            'id_task_state' => $this->faker->numberBetween(1, 3),
            'created_by' => $this->faker->numberBetween($min = 1, $max = 10),
            'id_project' => $this->faker->numberBetween($min = 1, $max = 10)
        ];
    }
}
