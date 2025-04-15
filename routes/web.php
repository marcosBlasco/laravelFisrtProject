<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
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