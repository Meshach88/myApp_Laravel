<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    $jobs = Job::all();

    dd($jobs[2]->title);

    // return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id){

    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('aboutUs');
});

Route::get('/contact', function () {
    return view('contact');
});
