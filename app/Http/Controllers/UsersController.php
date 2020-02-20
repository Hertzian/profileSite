<?php

namespace App\Http\Controllers;

use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth', ['except' => [
            'index', 'about', 'contact']
            ]);
    }

    // Frontend 2019
    public function index(){
        $user = User::firstOrFail();

        // return view('frontend.index', [
        return view('frontend.2020-1.layouts.index', [
            'user' => $user
        ]);
    }

    public function about(){
        $user = User::firstOrFail();
        $jobs = Job::paginate(3);

        return view('frontend.about', [
            'user' => $user,
            'jobs' => $jobs
        ]);
    }

    public function contact(){
        $user = User::firstOrFail();

        return view('frontend.contact', [
            'user' => $user
        ]);
    }

    // Backend
    public function profileView(){
        $user = Auth::user();

        return view('backend.profile', [
            'user' => $user
        ]);
    }
    
    public function updateProfile(Request $request){
        $user = Auth::user();

        $this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'github' => 'required',
            'linkedin' => 'required',
            'profesion' => 'required',
            'bio' => 'required',
            'phone' => 'required',
            'img' => 'image|max:1999',
            'background' => 'image|max:1999',

            // 'email' => 'unique:users,email,' . $user->id,
            'email' => ['required','email',Rule::unique('users','email')->ignore($user->id)],

            'password' => 'nullable|min:8'
        ]);

        if ($request->file('img')) {
            $fileNameWithExt = $request->file('img')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $imgFileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('img')->storeAs('public/img', $imgFileNameToStore);
            $user->img = $imgFileNameToStore;
        }

        if ($request->file('background')) {
            $fileNameWithExt = $request->file('background')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('background')->getClientOriginalExtension();
            $backgroundFileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('background')->storeAs('public/img', $backgroundFileNameToStore);
            $user->background = $backgroundFileNameToStore;
        }

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->github = $request->input('github');
        $user->github = $request->input('github');
        $user->linkedim = $request->input('linkedim');
        $user->profesion = $request->input('profesion');
        $user->bio = $request->input('bio');
        $user->phone = $request->input('phone');
        // $user->active = $request->input('active');
        
        // $user->img = $request->input('img');
        
        $user->email = $request->input('email');

        if ($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        $user->update();

        return redirect('/admin/profile')->with('message', 'Profile updated');
    }
}
