<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
<<<<<<< HEAD
        // $user_id = Auth::user()->id;
        // $user_name = Auth::user()->name;
        // return view("welcome", compact("user_id", "user_name"));

        return view("welcome");
=======
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->first_name;
        $last_name = Auth::user()->last_name;
        return view("welcome", compact("user_id", "user_name", "last_name"));
>>>>>>> b389e16e17eb3127bb007cf28be59161cc9013e9
    }


    public function profile()
    {
        $allUsers = DB::table("users")->limit(1)->orderBy('id', 'desc')->get();
        return view("profile", ["users" => $allUsers]);
    }

    public function editProfile()
    {
        return view("editProfile");
    }


    public function registerUser()
    {
        return view("register");
    }

    public function registrationPost(Request $request)
    {
        $user = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'bio' => $request->bio,
        ];

        DB::table("users")->insert($user);
        return redirect()->route('signIn');
    }

    public function signIn()
    {
        return view("signIn");
    }


    public function form()
    {
        return view("form");
    }
}
