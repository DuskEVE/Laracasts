<x-layout>
    <x-slot:title>
        Create job
    </x-slot:title>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create a new job</h2>
            <p class="mt-1 text-sm/6 text-gray-600">We just need some details</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <x-form-label for="title">Title</x-form-label>
                <div class="mt-2">
                  <x-form-input name="title" id="title" placeholder="Programmer" required />

                  <x-form-error name="title" />
                </div>
              </div>
      
              <div class="sm:col-span-4">
                <x-form-label for="salary">Salary</x-form-label>
                <div class="mt-2">
                  <x-form-input name="salary" id="salary" placeholder="$50000" required />

                  <x-form-error name="salary" />
                </div>
              </div>

            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <x-form-button>Save</x-form-button>
        </div>
      </form>
      

</x-layout>