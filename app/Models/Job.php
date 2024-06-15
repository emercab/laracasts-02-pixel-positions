<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
  use HasFactory;

  protected $fillable = [
    'employer_id',
    'title',
    'salary',
    'location',
    'schedule',
    'url',
    'featured',
  ];


  public function employer(): BelongsTo
  {
    return $this->belongsTo(Employer::class);
  }


  public function tags(): BelongsToMany
  {
    return $this->belongsToMany(Tag::class, 'job_tag');
  }


  public function tag(string $name): void
  {
    $tag = Tag::firstOrCreate(['name' => $name]);
    $this->tags()->attach($tag);
  }


  public function limitedTags($limit = 3): BelongsToMany
  {
    return $this->belongsToMany(Tag::class, 'job_tag')
      ->limit($limit);
  }
}
