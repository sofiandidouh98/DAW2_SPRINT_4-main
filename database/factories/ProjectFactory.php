<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'location' => $this->faker->address(),
            'id_category_proposal_project' => $this->faker->numberBetween(1, 5),
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'id_proposal' => $this->faker->numberBetween(1, 10),
            'id_state_proposal_project' => $this->faker->numberBetween(1, 1),
            'id_creator' => $this->faker->numberBetween(1,1)

        ];
    }
}

