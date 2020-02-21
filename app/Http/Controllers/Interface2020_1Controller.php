<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use App\Work;
use App\Skill;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class Interface2020_1Controller extends Controller
{
    public function data(){
        $user = $this->hi();
        $jobs = $this->experience();
        $works = $this->work();
        $skills = $this->skill();

        return [
            'user' => $user,
            'jobs' => $jobs,
            'skills' => $skills,
            'works' => $works
        ];
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

    // data for views
    public function index(){

        return view('frontend.2020-1.layouts.index')->with([
            'user' => $this->data()['user'],
            'jobs' => $this->data()['jobs'],
            'skills' => $this->data()['skills'],
            'works' => $this->data()['works'],
        ]);
    }

    public function pdfResume(){
        return view('pdf.resume')->with([
            'user' => $this->data()['user'],
            'jobs' => $this->data()['jobs'],
            'skills' => $this->data()['skills'],
        ]);
    }

    public function pdfResumeDownload(){
        $pdf = PDF::loadview('pdf.resume', [
            'user' => $this->data()['user'],
            'jobs' => $this->data()['jobs'],
            'skills' => $this->data()['skills'],
        ]);

        // return $pdf->download('EduardoAguilarCV.pdf');
        return $pdf->stream('EduardoAguilarCV.pdf');
    }

    public function workDetail($workId){
        $work = Work::find($workId);

        return view('frontend.2020-1.layouts.detail')->with('work', $work);
    }
}
