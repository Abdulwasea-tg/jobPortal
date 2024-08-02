<?php

namespace Database\Seeders;

use Database\Factories\EmployerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Employer;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employer::factory()->count(4)->create();
    }
}
