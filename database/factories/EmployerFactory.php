<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CompanyName'=>fake()->unique()->company(),
            'ContactPerson'=>fake()->name(), 
            'Address'=>fake()->address(), 
            'City'=>fake()->city(), 
            'Email'=>fake()->unique()->safeEmail(), 
            'Mobile'=>fake()->phoneNumber(), 
            'Area_Work'=>fake()->name(), 
            /* $table->enum('Status',['confirme', 'not confirmed'], */ 
            'UserName' => fake()->userName(), 
            'Password' =>fake()->password(), 
            'Question' =>fake()->sentence(), 
            'Answer'=>fake()->word(),
        ];
    }
}
