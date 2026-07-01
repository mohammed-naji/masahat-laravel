<?php

namespace Database\Factories;

use App\Models\Identity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Identity>
 */
class IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->numberBetween(000000000, 999999999),
            'image' => fake()->imageUrl(),
            'release_date' => fake()->date(),
            'expire_date' => fake()->date(),
            'user_id' => fake()->unique()->numberBetween(1, 10),
        ];
    }
}
