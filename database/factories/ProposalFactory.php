<?php

namespace Database\Factories;

use App\Models\Proposal;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProposalFactory extends Factory
{   
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proposal::class;


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
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'id_category_proposal_project' => $this->faker->numberBetween($min = 1, $max = 10),
            'id_state_proposal_project' => $this->faker->numberBetween($min = 1, $max = 2),
            'id_creator' => $this->faker->numberBetween($min = 1, $max = 10)
            
        ];
    }
}
