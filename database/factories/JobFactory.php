<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

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
            //fake seeder
            'employer_id'=>Employer::factory(),
            'title'=>fake()->jobTitle(),
            'salary' => fake()->numberBetween(10000, 100000),
            'location'=>fake()->streetAddress(),
            'schedule'=>'Full Time',
            'url'=>fake()->url(),
            'featured' => fake()->boolean(30), // 30% chance
        ];
    }
}
