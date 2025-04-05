<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', action: function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    //return view('jobs', ['jobs' => Job::with('employer')->paginate(10)]);
    return view('jobs', ['jobs' => Job::with('employer')->simplePaginate(10)]);
    // return view('jobs', ['jobs' => Job::with('employer')->cursorPaginate(10)]);
});

Route::get('/jobs/{id}', action: function ($id)  {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});
