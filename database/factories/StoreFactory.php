<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $store = $this->faker->word(2, true);
        return [
            'name' => $store,
            'slug' => $this->faker->paragraph(2, true),
            'phone' => $this->faker->phoneNumber(),
            'about' => str()->of($store)->slug()
        ];
    }
}
