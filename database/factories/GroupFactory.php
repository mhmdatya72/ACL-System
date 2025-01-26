<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'slug'=> $this->faker->slug,
            'description'=> $this->faker->sentence,
            'level' => $this->faker->numberBetween(1, 10),
            'allow_guest_access' => $this->faker->boolean,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
