<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\Array_;

Route::get('/', function () {
    return view('home', 
        ['greeting'=>'hello', 'name'=>'Dusk', ]
    );
});

Route::get('/job', function() {
    return view('job', 
        [
            'jobs'=>[
                ['id'=>1, 'title'=>'gamer', 'salary'=>0], 
                ['id'=>2, 'title'=>'programmer', 'salary'=>50000], 
                ['id'=>3, 'title'=>'worker', 'salary'=>28000]
            ]
        ]
    );
});

Route::get('/job/{id}', function($id) {
    $jobs= [
        ['id'=>1, 'title'=>'gamer', 'salary'=>0], 
        ['id'=>2, 'title'=>'programmer', 'salary'=>50000], 
        ['id'=>3, 'title'=>'worker', 'salary'=>28000]
    ];
    $targetJob = Arr::first($jobs, function($job) use ($id){
        return $job['id'] == $id;
    });
    
    return view('job', ['jobs'=>[$targetJob]]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});