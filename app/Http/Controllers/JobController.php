<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function index(){
        return view('jobs.index', ['jobs' => Job::with('employer')->latest()->simplePaginate(10)]);
    }
    public function create(){
        return view('jobs.create');
    }
    public function store(Request $request){
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
    }
    public function show(Job $job){
        return view('jobs.show', ['job' => $job]);
    }
    public function edit(Job $job){
        return view('jobs.edit', ['job' => $job]);
    }
    public function update(Request $request, Job $job){
        // validate
    request()->validate([
        'title'=> ['required','string','min:3'],
        'salary'=> ['required'],
    ]);


    $job->update([
        'title'=> request('title'),
        'salary'=> request('salary'),
    ]);

    return redirect('/jobs/' . $job->id);
    }
    public function destroy(Job $job){
        //authorize (hold on...)
        //delete the job
        //Job::findOrFail($id)->delete();   // another posivility
        $job->delete();
        //redirect
        return redirect('/jobs/');
    }

}
