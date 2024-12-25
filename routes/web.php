<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\Array_;
use App\Models\Job;

Route::get('/', function () {
    return view('home', 
        ['greeting'=>'hello', 'name'=>'Dusk']
    );
});

Route::get('/jobs', function(){
    // $jobs = Job::all();
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs'=>$jobs]);
});

Route::get('/jobs/create', function(){
    return view('jobs.create');
});

Route::get('/jobs/{id}', function($id){
    $targetJob = Job::find($id);
    // dd($targetJob);
    return view('jobs.show', ['job'=>$targetJob]);
});

Route::post('/jobs', function(){
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');;
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});