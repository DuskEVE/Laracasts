<x-layout>
    <x-slot:title>
        Home page
    </x-slot:title>
    <h1>Hello Jobs!</h1>

    <div class="space-y-4">
        <div class="block px-4 border border-gray-200 rounded-lg">
            <div>
                {{$job->employer->name}}
            </div>
            <div>
                <b>{{$job['title']}}</b> payment:{{$job['salary']}}
            </div>
        </div>
    </div>

</x-layout>