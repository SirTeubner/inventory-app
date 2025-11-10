<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InventoryItem>
 */
class InventoryItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'inventory_number' => strtoupper(fake()->name()),
            'title' => strtoupper(fake()->sentence(3)),
            'is_marked' => $this->faker->boolean(15),
            'note' => $this->faker->optional()->sentence(),
        ];
    }
}
