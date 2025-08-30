<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penjual_id' => User::factory(),
            'pembeli_id' => User::factory(),
            'skill_id' => Skill::factory(),
            'status' => fake()->randomElement(['belum selesai', 'selesai', 'batal']),
        ];
    }
}
