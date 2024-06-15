@props(['job'])

<x-panel class="flex-col text-center">

  <div class="self-start text-sm">{{ $job->employer->name }}</div>

  <div class="py-8">
    <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">
      {{ $job->title }}
    </h3>
    <p class="mt-4 text-sm">{{ $job->schedule }} - from {{ $job->salary }}</p>
  </div>

  <div class="flex justify-between items-center mt-auto">
    <div class="space-x-2">
      @foreach ($job->tags as $tag)
        <x-tag :$tag size="sm" />
      @endforeach
    </div>

    <x-employer-logo :employer="$job->employer" width="42" height="42" />
  </div>

</x-panel>
