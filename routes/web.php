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
    return view('jobs.index', ['jobs' => Job::with('employer')->latest()->simplePaginate(10)]);
    // return view('jobs', ['jobs' => Job::with('employer')->cursorPaginate(10)]);
});

Route::get('/jobs/create', action: function ()  {
    return view('jobs.create');
});

Route::post('/jobs', action: function ()  {
    // redire view('jobs.create');
    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1,
    ]);
    return redirect('/jobs');
});

Route::get('/jobs/{id}', action: function ($id)  {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});
