<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }

    public function skillView(){
        $skills = Skill::all();

        return view('backend.skills')->with('skills', $skills);
    }

    public function newSkill(Request $request){
        $user = Auth::user();

        $this->validate($request, [
            'name' => 'required',
            'value' => 'required|numeric',
            'show' => 'required'
        ]);

        $skill = new Skill();

        $skill->user_id = $user->id;
        $skill->name = $request->input('name');
        $skill->value = $request->input('value');
        $skill->show = $request->input('show');
        $skill->save();

        return redirect('/admin/skills')->with('message', 'Skill added');
    }

    public function updateSkill(Request $request, $skillId){
        $skill = Skill::find($skillId);

        $this->validate($request, [
            'name' => 'required',
            'value' => 'required|numeric',
            'show' => 'required'
        ]);

        $skill->name = $request->input('name');
        $skill->value = $request->input('value');
        $skill->show = $request->input('show');
        $skill->update();

        return redirect('/admin/skills')->with('message', 'Skill updated');
    }
}
