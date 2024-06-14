<x-layout>
  <section class=" mb-16 text-center pt-6">
    <h1 class="text-4xl font-bold">Let's find your next job</h1>

    <x-forms.form action="/search" class="mt-6">
      <x-forms.input :label="false" name="search" placeholder="Web developer..." />
    </x-forms.form>
  </section>

  <section class="mb-6">
    <x-section-heading>Search Results</x-section-heading>
    <p>Results found for "{{ $search }}."</p>
  
    <div class="mt-6 space-y-6">
      @foreach ($jobs as $job)
        <x-job-card-wide :$job />
      @endforeach
    </div>
  </section>

</x-layout>
