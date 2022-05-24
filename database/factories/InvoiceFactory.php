<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
        
/**
 * @var string
 */
    protected $model = Invoice::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

     
    public function definition()
    {
        return [
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('now', '+1 year'),
            'total_no_tax' => $this->faker->randomDigit(),
            'total_tax' => $this->faker->randomDigit(), 
            'total' => $this->faker->randomDigit(), 
            'notes' => $this->faker->paragraph(), 
            'bar_code' => $this->faker->ean13(),
            'qr_code' => $this->faker->ean13(),
            'delivered' => $this->faker->randomDigit(),
            'id_user' => $this->faker->numberBetween($min = 1, $max = 10)
        ];
    }
}