<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Work;
use App\Skill;
use Illuminate\Http\Request;

class Interface2020_1Controller extends Controller
{
    // public function __contruct(){
        // $this->user = User::firstOrFail();
        // $this->job = Job::paginate(3);
        // $this->work = Work::patinate(4);
    // }

    public function index(){
        $user = $this->hi();
        $jobs = $this->experience();
        $works = $this->work();
        $skills = $this->skill();

        return view('frontend.2020-1.layouts.index')->with([
            'user' => $user,
            'jobs' => $jobs,
            'skills' => $skills,
            'works' => $works
        ]);
    }

    public function hi(){
        $user = User::firstOrFail();

        return $user;
    }

    public function experience(){
        $exp = Job::all();

        return $exp;
    }

    public function skill(){
        $skills = Skill::all();

        return $skills;
    }

    public function work(){
        $work = Work::all();

        return $work;
    }

    public function workDetail($workId){
        $work = Work::find($workId);

        return view('frontend.2020-1.layouts.detail')->with('work', $work);
    }
}
