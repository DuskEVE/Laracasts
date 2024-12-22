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

Route::get('/job', function(){
    // $jobs = Job::all();
    $jobs = Job::with('employer')->paginate(3);
    return view('job', ['jobs'=>$jobs]);
});

Route::get('/job/{id}', function($id){
    $targetJob = Job::find($id);
    // dd($targetJob);
    return view('job', ['jobs'=>[$targetJob]]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});