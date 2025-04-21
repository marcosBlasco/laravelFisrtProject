<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);


Route::get('/register',[RegisteredUserController::class, 'create']);
Route::post('/register',[RegisteredUserController::class, 'store']);

Route::get('/login',[SessionController::class, 'create']);
Route::post('/login',[SessionController::class, 'store']);

// Route::controller(JobController::class)->group(function(){
//     //index
//     Route::get('/jobs',  'index'); 
//     // Create
//     Route::get('/jobs/create',  'create');  
//     //store
//     Route::post('/jobs',  'store');
//     //show 
//     Route::get('/jobs/{job}',  'show');
//     // Edit
//     Route::get('/jobs/{job}/edit',  'edit');
//     // Update
//     Route::patch('/jobs/{job}',  'update');
//     // destroy
//     Route::delete('/jobs/{job}',  'destroy');
// });


// //index
// Route::get('/jobs', [JobController::class, 'index']); 
// // Create
// Route::get('/jobs/create', [JobController::class, 'create']);  
// //store
// Route::post('/jobs', [JobController::class, 'store']);
// //show 
// Route::get('/jobs/{job}', [JobController::class, 'show']);
// // Edit
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
// // Update
// Route::patch('/jobs/{job}', [JobController::class, 'update']);
// // destroy
// Route::delete('/jobs/{job}', [JobController::class, 'destroy']);