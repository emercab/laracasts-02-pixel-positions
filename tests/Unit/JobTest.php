<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to a employer', function () {
  // AAA
  // Arrange
  $employer = Employer::factory()->create();
  $job = Job::factory()->create(['employer_id' => $employer->id]);

  // Act
  $jobEmployer = $job->employer;

  // Assert
  expect($jobEmployer->is($employer))->toBeTrue();
});

it('can have tags', function () {
  // AAA
  // Arrange
  $job = Job::factory()->create();
  
  // Act
  $job->tag('Frontend');

  // Assert
  expect($job->tags)->toHaveCount(1);
});

