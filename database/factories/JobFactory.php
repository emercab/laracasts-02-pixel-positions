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
    $salary = "$" . random_int(25, 89) . ",000 USD";
    return [
      'employer_id' => Employer::InRandomOrder()->first()->id,
      'title' => fake()->jobTitle(),
      'salary' => $salary,
      'location' => fake()->randomElement(['Remote', $city]),
      'schedule' => fake()->randomElement(['Full-time', 'Part-time', 'Contract']),
      'url' => fake()->url(),
      'featured' => false,
    ];
  }
}
