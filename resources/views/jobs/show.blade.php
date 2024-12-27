<x-layout>
    <x-slot:title>
        Job
    </x-slot:title>

    <div class="space-y-4">
        <div class="block px-4 border border-gray-200 rounded-lg">
            <div>
                {{$job->employer->name}}
            </div>
            <div>
                <b>{{$job->title}}</b> payment:{{$job->salary}}
            </div>
        </div>
    </div>

    <div class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit job</x-button>
    </div>

</x-layout>