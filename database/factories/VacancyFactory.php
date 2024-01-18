<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'public_id' => $this->faker->uuid,
            'title' => $this->faker->sentence(4),
            'short_description' => $this->faker->sentence(20),
            'original_url' => $this->faker->url,
            'published_at' => $this->faker->date(),
            'expires_at' => $this->faker->date(),
            'company_id' => $this->faker->numberBetween(1, 10),
            'added_user_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
