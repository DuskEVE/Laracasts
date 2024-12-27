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

// index
Route::get('/jobs', function(){
    // $jobs = Job::all();
    $jobs = Job::with('employer')->latest()->paginate(3);
    return view('jobs.index', ['jobs'=>$jobs]);
});

// create
Route::get('/jobs/create', function(){
    return view('jobs.create');
});

// show
Route::get('/jobs/{id}', function($id){
    $targetJob = Job::find($id);
    // dd($targetJob);
    return view('jobs.show', ['job'=>$targetJob]);
});

// store
Route::post('/jobs', function(){
    request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=>['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');;
});

// edit
Route::get('/jobs/{id}/edit', function($id){
    $targetJob = Job::find($id);
    return view('jobs.edit', ['job'=>$targetJob]);
});

// update
Route::patch('/jobs/{id}', function($id){
    // validate
    request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=>['required']
    ]);
    
    // authorize
    
    // update the job
    $job = Job::findOrFail($id);
    
    $job->update([
        'title'=>request('title'),
        'salary'=>request('salary')
    ]);
    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->save();
    
    // redirect
    return redirect('/jobs/'.$job->id);
});

// destroy
Route::delete('/jobs/{id}', function($id){
    // authorize

    // delete
    $job = Job::findOrFail($id);
    $job->delete();
    // $job = Job::findOrFail($id)->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});