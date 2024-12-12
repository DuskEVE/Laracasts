<x-layout>
    <x-slot:title>
        Home page
    </x-slot:title>
    <h1>Hello Jobs!</h1>

    @foreach($jobs as $job)
        <li><b>{{$job['title']}}</b> payment:{{$job['salary']}}</li>
    @endforeach
</x-layout>