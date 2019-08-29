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
        $works = Work::paginate(4);

        return view('frontend.work', [
            'works' => $works
        ]);
    }

    public function workView(){
        $works = Work::all();

        return view('backend.work')->with('works', $works);
    }
    
    public function updateWork(Request $request, $id){
        $work = Work::find($id);

        $this->validate($request, [
            'name' => 'required',
            // image
            'url' => 'required',
            'github' => 'required'
        ]);

        $work->name = $request->input('name');
        $work->url = $request->input('url');
        $work->github = $request->input('github');

        $work->update();

        return redirect('/admin/work')->with('message', 'Work updated');        
    }
}
