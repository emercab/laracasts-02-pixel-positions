<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function search(Request $request)
  {
    $search = $request->input('search');

    // Search text in title, location, schedule, employer name and tags
    $jobs = Job::where(
      function ($query) use ($search) {
        $query->where('title', 'LIKE', "%{$search}%")
          ->orWhere('location', 'LIKE', "%{$search}%")
          ->orWhere('schedule', 'LIKE', "%{$search}%");
      }
    )->orWhereHas(
      'employer',
      function ($query) use ($search) {
        $query->where('name', 'LIKE', "%{$search}%");
      }
    )->orWhereHas(
      'tags',
      function ($query) use ($search) {
        $query->where('name', 'LIKE', "%{$search}%");
      }
    )->get();

    return view('jobs.results', ['jobs' => $jobs, 'search' => $search]);
  }
}
