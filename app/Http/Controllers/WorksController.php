<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    
    public function addWork(Request $request){
        $user = Auth::user();

        $this->validate($request, [
            'name' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'img' => 'required|image|max:1999',
            'url' => 'required',
            'github' => 'required',
            'show' => 'required'
        ]);
            
        $work = new Work();

        if ($request->file('img')) {
            $fileNameWithExt = $request->file('img')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $imgFileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/img', $imgFileNameToStore);
            $work->img = $imgFileNameToStore;
        }

        $work->user_id = $user->id;
        $work->name = $request->input('name');
        $work->description1 = $request->input('description1');
        $work->description2 = $request->input('description2');
        $work->url = $request->input('url');
        $work->github = $request->input('github');
        $work->show = $request->input('show');

        $work->save();

        return redirect('/admin/work')->with('message', 'Work added');        
    }

    public function updateWork(Request $request, $id){
        $work = Work::find($id);

        $this->validate($request, [
            'name' => 'required',
            'description1' => 'required',
            'description2' => 'required',
            'img' => 'image|max:1999',
            'url' => 'required',
            'github' => 'required',
            'show' => 'required'
        ]);

        if ($request->file('img')) {
            $fileNameWithExt = $request->file('img')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $imgFileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/img', $imgFileNameToStore);
            $work->img = $imgFileNameToStore;
        }

        $work->name = $request->input('name');
        $work->description1 = $request->input('description1');
        $work->description2 = $request->input('description2');
        $work->url = $request->input('url');
        $work->github = $request->input('github');
        $work->show = $request->input('show');

        $work->update();

        return redirect('/admin/work')->with('message', 'Work updated');        
    }
}
