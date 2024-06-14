<x-layout>
  <section class=" mb-16 text-center pt-6">
    <h1 class="text-4xl font-bold">Let's find your next job</h1>

    <x-forms.form action="/search" class="mt-6">
      <x-forms.input :label="false" name="search" placeholder="Web developer..." />
    </x-forms.form>
  </section>

  <section class="mb-6">
    <x-section-heading>Featured Jobs</x-section-heading>

    <div class="grid lg:grid-cols-3 gap-8 mt-6">
      @foreach ($featuredJobs as $job)
        <x-job-card :$job />
      @endforeach
    </div>
  </section>

  <section class="mb-6">
    <x-section-heading>Tags</x-section-heading>

    <div class="mt-6 space-x-2">
      @foreach ($tags as $tag)
        <x-tag :$tag />
      @endforeach
    </div>

  </section>

  <section class="mb-6">
    <x-section-heading>Recent Jobs</x-section-heading>

    <div class="mt-6 space-y-6">
      @foreach ($recentJobs as $job)
        <x-job-card-wide :$job />
      @endforeach
    </div>

  </section>
</x-layout>
