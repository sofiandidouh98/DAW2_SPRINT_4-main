<?php

namespace Database\Factories;

use App\Models\DocumentsType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentsTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentsType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->randomElement(['fitxer'])
        ];
    }
}
