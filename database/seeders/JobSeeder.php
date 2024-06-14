<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Database\Factories\JobTagFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $tags = Tag::factory(8)->create();

    Employer::factory(25)->create();

    $jobs = Job::factory(100)->create();

    $jobs->each(function ($job) use ($tags) {
      $job->tags()->attach(
        $tags->random(rand(3, 4))->pluck('id')->toArray()
      );
    });
  }
}
