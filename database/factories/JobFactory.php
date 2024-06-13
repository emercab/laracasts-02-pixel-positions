<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    $city = fake()->city() . ', ' . fake()->stateAbbr();
    return [
      'employer_id' => Employer::factory(),
      'title' => fake()->jobTitle(),
      'salary' => fake()->randomElement(['$33,000 USD', '$40,000 USD', '$45,000 USD', '$50,000 USD', '$52,000 USD', '$56,000 USD', '$61,000 USD', '$73,000 USD']),
      'location' => fake()->randomElement(['Remote', $city]),
      'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract']),
      'url' => fake()->url(),
      'featured' => false,
    ];
  }
}
