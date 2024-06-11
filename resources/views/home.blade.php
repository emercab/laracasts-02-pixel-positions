<x-layout>
  <section class=" mb-16 text-center pt-6">
    <h1 class="text-4xl font-bold">Let's find your next job</h1>

    <form action="" class="mt-6">
      <input type="text" placeholder="Web developer..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
    </form>
  </section>

  <section class="mb-6">
    <x-section-heading>Featured Jobs</x-section-heading>

    <div class="grid lg:grid-cols-3 gap-8 mt-6">
      <x-job-card />
      <x-job-card />
      <x-job-card />
    </div>
  </section>

  <section class="mb-6">
    <x-section-heading>Tags</x-section-heading>

    <div class="mt-6 space-x-2">
      <x-tag href="#">Frontend</x-tag>
      <x-tag href="#">Backend</x-tag>
      <x-tag href="#">API</x-tag>
      <x-tag href="#">Laravel</x-tag>
      <x-tag href="#">Livewire</x-tag>
      <x-tag href="#">Tag</x-tag>
      <x-tag href="#">Tag</x-tag>
      <x-tag href="#">Tag</x-tag>
      <x-tag href="#">Tag</x-tag>
      <x-tag href="#">Tag</x-tag>
    </div>

  </section>

  <section class="mb-6">
    <x-section-heading>Recent Jobs</x-section-heading>

    <div class="mt-6 space-y-6">
      <x-job-card-wide />
      <x-job-card-wide />
      <x-job-card-wide />
    </div>
    
  </section>
</x-layout>
