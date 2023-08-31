<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joboffer>
 */
class JobofferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1,3),
            'joboffer'=> fake()->word(),
            'slug'=> fake()->slug(),
            'excerpt' => fake()->paragraph(),
            'company_name' => fake()->word(),
            'location'=> 'Berlin',
            'jobdescription' => fake()->paragraph(),

            
        ];
    }
}
