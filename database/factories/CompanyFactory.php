<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->sentence(3),
            'public_id'=>$this->faker->uuid,
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'address'=>$this->faker->address,
            'google_location_key'=>$this->faker->uuid,
            'logo'=>$this->faker->imageUrl,
            'description'=>$this->faker->sentence(16),
        ];
    }
}
