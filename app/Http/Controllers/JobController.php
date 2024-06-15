<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
  public function index()
  {
    $featuredJobs = Job::with(
      ['limitedTags' => function ($query) {
        $query->orderBy('id');
      }]
    )->latest()->where('featured', true)->take(6)->get();
    $recentJobs = Job::orderBy('created_at', 'desc')->take(15)->get();
    $tags = Tag::take(10)->get();

    return view('jobs.index', [
      'featuredJobs' => $featuredJobs,
      'recentJobs' => $recentJobs,
      'tags' => $tags,
    ]);
  }

  
  public function create()
  {
    return view('jobs.create');
  }

  
  public function store(Request $request)
  {
    $attributes = $request->validate([
      'title'    => ['required'],
      'salary'   => ['required'],
      'location' => ['required'],
      'schedule' => ['required', Rule::in(['Full-time', 'Part-time', 'Contract'])],
      'url'      => ['required', 'active_url'],
      'tags'     => ['nullable'],
    ]);

    $attributes['featured'] = $request->has('featured');

    // Create the job with employer relationship and without tags
    $job = auth()->user()->employer->jobs()->create(
      Arr::except($attributes, 'tags')
    );

    // Attach tags to the job
    $tags = explode(',', $attributes['tags']);
    if ($tags ?? false) {
      foreach ($tags as $tag) {
        $job->tag( trim($tag) );
      }
    }

    return redirect('/');
  }

  
  public function show(Job $job)
  {
    //
  }

  
  public function edit(Job $job)
  {
    //
  }

  
  public function update(Request $request, Job $job)
  {
    //
  }

  
  public function destroy(Job $job)
  {
    //
  }
}
