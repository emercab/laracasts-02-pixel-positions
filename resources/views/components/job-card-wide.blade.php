@props(['job'])

<x-panel class="gap-x-6">
  <div class="">
    <x-employer-logo :employer="$job->employer" />
  </div>

  <div class="flex-1 flex flex-col">
    <a href="" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

    <h3 class="text-xl font-bold mt-3 group-hover:text-blue-800 transition-colors duration-300">
      {{ $job->title }}
    </h3>
    
    <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - from {{ $job->salary }}</p>
  </div>

  <div class="space-x-2 mt-auto">
    @foreach ($job->tags as $tag)
      <x-tag :$tag />
    @endforeach
  </div>

</x-panel>
