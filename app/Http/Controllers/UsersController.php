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

    public function index(){
        $user = User::find(1);

        return view('frontend.index', [
            'user' => $user
        ]);
    }

    public function about(){
        $user = User::find(1);
        $jobs = Job::paginate(3);

        return view('frontend.about', [
            'user' => $user,
            'jobs' => $jobs
        ]);
    }

    public function contact(){
        $user = User::find(1);

        return view('frontend.contact', [
            'user' => $user
        ]);
    }

    public function profileView(){
        $user = Auth::user();

        return view('backend.profile', [
            'user' => $user
        ]);
    }
    
    public function updateProfile(Request $request){
        $user = Auth::user();

        // dd($user);

        $this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'profesion' => 'required',
            'bio' => 'required',
            'phone' => 'required',
            'img' => 'image|max:1999',
            'background' => 'image|max:1999',

            'email' => ['required','email',Rule::unique('users','email')->ignore($user->id)],

            'password' => 'min:8'
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
        $user->profesion = $request->input('profesion');
        $user->bio = $request->input('bio');
        $user->phone = $request->input('phone');
        // $user->active = $request->input('active');
        
        // $user->img = $request->input('img');
        
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        

        $user->update();

        return redirect('/admin/profile')->with('message', 'Profile updated');
    }
}
