<?php

namespace Database\Factories;

use App\Models\Machine;
use Illuminate\Database\Eloquent\Factories\Factory;

class MachineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */

    protected $model = Machine::class;

    
    /**
     * Define the model's default state.
     *
     * @return array
     */
     
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'brand' => $this->faker->randomElement(['JVM', 'JDK', 'JRE', 'JPA', 'Spring', 'Hibernate']),
            'model' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomNumber(2),
            'serial_number' => $this->faker->ean13(),
            'bar_code' => $this->faker->isbn13(),
            'qr_code' => $this->faker->isbn10(),
            'image' => $this->faker->imageUrl()
        ];
    }
}
