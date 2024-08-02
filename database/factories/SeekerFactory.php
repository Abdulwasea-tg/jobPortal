<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seeker>
 */
class SeekerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name'=>fake()->name(), 
            'Address'=>fake()->address(),
            'City'=>fake()->city(),
            'Email'=>fake()->unique()->safeEmail(),
            'Mobile'=>fake()->phoneNumber(),
            'Qualification'=>Str::random(3),
            'Gender'=>'male', 
            'BirthDate'=>fake()->date(), 
            'Resume'=>fake()->filePath(), 
            'UserName' => fake()->userName(), 
            'Password' =>fake()->password(), 
            'Question' =>fake()->realText(), 
            'Answer'=>fake()->realText(),
        ];
    }
}
