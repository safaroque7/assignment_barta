<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
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
        ];

        DB::table("users")->insert($user);
        return redirect()->route('profile');
    }

    public function signIn()
    {
        return view("signIn");
    }
}