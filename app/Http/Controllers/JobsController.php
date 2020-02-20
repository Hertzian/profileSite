<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function jobsView(){
        $jobs = Job::all();

        return view('backend.jobs')->with('jobs', $jobs);
    }

    public function newJob(Request $request){
        $user = Auth::user();

        $this->validate($request, [
            'company' => 'required',
            'job' => 'required',
            'assignment' => 'required',
            'show' => 'required'
        ]);
            
        $job = new Job();

        $job->user_id = $user->id;
        $job->company = $request->input('company');
        $job->job = $request->input('job');
        $job->assignment = $request->input('assignment');
        $job->show = $request->input('show');
        $job->save();

        return redirect('/admin/jobs')->with('message', 'Job added');
    }

    public function updateJobs(Request $request, $id){
        $job = Job::find($id);

        $this->validate($request, [
            'company' => 'required',
            'job' => 'required',
            'assignment' => 'required',
            'show' => 'required'
        ]);

        $job->company = $request->input('company');
        $job->job = $request->input('job');
        $job->assignment = $request->input('assignment');
        $job->show = $request->input('show');
        $job->update();

        return redirect('/admin/jobs')->with('message', 'Job updated');
    }
}
