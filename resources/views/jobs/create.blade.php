<x-layout>
  <section class="mb-6">
    <x-section-heading>Create a Job</x-section-heading>

    <x-forms.form action="/jobs" method="POST">
      <x-forms.input name="title" label="Title:" placeholder="CEO" />
      <x-forms.input name="salary" label="Salary:" placeholder="$60,000 USD" />
      <x-forms.input name="location" label="Location:" placeholder="Winter Park, FL" />
      
      <x-forms.input name="url" label="URL:" placeholder="https://job.com" type="url" />

      <x-forms.select name="schedule" label="Schedule:">
        <option>Full-time</option>
        <option>Part-time</option>
        <option>Contract</option>
      </x-forms.select>

      <x-forms.checkbox name="featured" label="Featured (Extra Costs)" />
      
      <x-forms.input name="tags" label="Tags (coma separated):" placeholder="laravel, education, frontend" />

      <x-forms.divider />
      
      <div class="flex justify-center">
        <x-forms.button>Create Job</x-forms.button>
      </div>
    </x-forms.form>
  
  </section>

</x-layout>
