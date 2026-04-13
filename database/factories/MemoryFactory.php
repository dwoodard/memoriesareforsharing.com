<?php

namespace Database\Factories;

use App\Models\Memory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Memory>
 */
class MemoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'contact' => $this->faker->email(),
            'story' => $this->faker->paragraph(5),
            'year' => $this->faker->optional()->year(),
            'relation' => $this->faker->optional()->word(),
            'photo_url' => $this->faker->optional()->url(),
        ];
    }
}
