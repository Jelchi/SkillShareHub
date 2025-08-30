<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'kategori' => fake()->randomElement(['design', 'copywriting', 'web']),
            'judul' => fake()->sentence(3),
            'deskripsi' => fake()->paragraph(),
            'harga' => fake()->numberBetween(50000, 500000),
            'rating' => fake()->randomFloat(1, 1, 5),
        ];
    }
}
