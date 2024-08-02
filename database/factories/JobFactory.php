<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "CompanyName"=>fake()->unique()->company(),
            "JobTitle"=>fake()->unique()->jobTitle(),
            "Address"=>fake()->streetAddress(),
            "Vacancy"=>fake()->numberBetween(1, 10),
            "MinQualification"=>Str::random(3),
            "Description"=>fake()->text(10),
        ];
    }
}
