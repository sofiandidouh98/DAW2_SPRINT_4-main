<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->word(), 
            'created_at' => now(), 
            'updated_at' => now(), 
            'id_document_type' =>1, 
            'id_parent_document' =>null, 
            'id_project' =>$this->faker->numberBetween(1, 3), 
            'id_user' =>$this->faker->numberBetween(1, 3)
        ];
    }
}