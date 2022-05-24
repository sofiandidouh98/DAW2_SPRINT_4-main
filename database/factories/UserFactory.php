<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'id_card' => $this->faker->randomElement(["62754436B", "12334455C", "23165545L", "98543445H"]),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => $this->faker->dateTimeBetween('-30 days', '-10 days'),
            'password' => $this->faker->password(),
            'remember_token' => $this->faker->password(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '-10 days'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', '-10 days'),
            'active' => $this->faker->boolean(),
            'id_user_type' => $this->faker->randomElement([1, 2]),
        ];
    }
}
