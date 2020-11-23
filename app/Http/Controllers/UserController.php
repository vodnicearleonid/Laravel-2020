<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            'avatar'=>'nullable|image',
        ]);

        //dd($request->all());
        if ($request->hasFile('avatar')){
            $folder = date('Y-m-d');
            $avatar = $request->file('avatar')->store("images/{$folder}");
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $avatar ?? null, // $avatar ? $avatar : null
        ]);
        session()->flash('success', 'Successful registration');
        Auth::login($user);
        return redirect()->home();
    }

    public function loginForm(){
        return view('user.login');
    }
    public function login(Request $request){
        //dd($request->all());
        //dd($request);
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->home();
        }
        return redirect()->back()->with('error', 'Incorrect login or password');

    }
    public function logout(){
//        Auth::logout();
        auth()->logout();
        return redirect()->route('login.create');
    }
}
