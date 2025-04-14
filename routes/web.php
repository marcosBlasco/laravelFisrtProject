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


//index
Route::get('/jobs', function () {
    //return view('jobs', ['jobs' => Job::with('employer')->paginate(10)]);
    return view('jobs.index', ['jobs' => Job::with('employer')->latest()->simplePaginate(10)]);
    // return view('jobs', ['jobs' => Job::with('employer')->cursorPaginate(10)]);
});

// Create
Route::get('/jobs/create', action: function ()  {
    return view('jobs.create');
});


//store
Route::post('/jobs', action: function ()  {
    // redire view('jobs.create');
    // validate
    request()->validate([
        'title'=> ['required','string','min:3'],
        'salary'=> ['required'],
    ]);

    Job::create([
        'title'=> request('title'),
        'salary'=> request('salary'),
        'employer_id'=> 1,
    ]);
    return redirect('/jobs');
});

//show 
Route::get('/jobs/{job}', action: function (Job $job)  {
    return view('jobs.show', ['job' => $job]);
});

// Edit
Route::get('/jobs/{job}/edit', action: function (Job $job)  {
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{job}', action: function (Job $job)  {
    
    // validate
    request()->validate([
        'title'=> ['required','string','min:3'],
        'salary'=> ['required'],
    ]);


    $job->update([
        'title'=> request('title'),
        'salary'=> request('salary'),
    ]);

    // persist
    // already done
    
    // redirect
    return redirect('/jobs/' . $job->id);
});

// destroy
Route::delete('/jobs/{job}', action: function (Job $job)  {
    //authorize (hold on...)
    //delete the job
    //Job::findOrFail($id)->delete();   // another posivility
    $job->delete();
    //redirect
    return redirect('/jobs/');
});