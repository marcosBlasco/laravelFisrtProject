<?php

use App\Http\Controllers\JobController;
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
Route::get('/jobs', [JobController::class, 'index']); 

// Create
Route::get('/jobs/create', [JobController::class, 'create']);  

//store
Route::post('/jobs', [JobController::class, 'store']);

//show 
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Edit
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Update
Route::patch('/jobs/{job}', [JobController::class, 'update']);

// destroy
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);