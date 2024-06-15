<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
  public function show(Tag $tag)
  {
    // Find the jobs with the given tag
    $jobs = $tag->jobs;

    return view('jobs.results', [
      'jobs' => $jobs,
      'search' => $tag->name,
    ]);
  }
}
