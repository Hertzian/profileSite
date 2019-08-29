<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function jobsView(){

        return view('backend.jobs');
    }

    public function updateJobs(Request $request){

        return view('backend.jobs')->with('message', 'Job updated');
    }
}
