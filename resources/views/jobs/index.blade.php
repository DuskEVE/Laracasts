<x-layout>
    <x-slot:title>
        Home page
    </x-slot:title>
    <h1>Hello Jobs!</h1>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 border border-gray-200 rounded-lg">
                <div>
                    {{$job->employer->name}}
                </div>
                <div>
                    <b>{{$job['title']}}</b> payment:{{$job['salary']}}
                </div>
            </a>
        @endforeach
    </div>

    <div>{{$jobs->links()}}</div>
</x-layout>