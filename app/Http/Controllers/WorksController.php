<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth', ['except' => [
            'work'
        ]]);
    }

    public function work(){
        $works = Work::where('show', 1)->paginate(4);

        return view('frontend.work', [
            'works' => $works
        ]);
    }

    public function workView(){
        $this->middleware('auth');

        return view('backend.work');
    }
    
    public function updateWork(Request $request){
        $this->middleware('auth');

        return view('backend.work')->with('message', 'Work updated');        
    }
}
