<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function jobsView(){
        $jobs = Job::all();

        return view('backend.jobs')->with('jobs', $jobs);
    }

    public function updateJobs(Request $request, $id){
        $job = Job::find($id);

        $this->validate($request, [
            'company' => 'required',
            'job' => 'required',
            'assignment' => 'required'
        ]);

        $job->company = $request->input('company');
        $job->job = $request->input('job');
        $job->assignment = $request->input('assignment');
        $job->update();

        return redirect('/admin/jobs')->with('message', 'Job updated');
    }
}
