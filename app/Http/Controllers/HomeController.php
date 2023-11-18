<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Flasher\Laravel\Facade\Flasher;
use Flasher\Prime\FlasherInterface;

class HomeController extends Controller
{

    public function index()
    {
        // $user_id = Auth::user()->id;
        // $user_name = Auth::user()->name;
        // return view("welcome", compact("user_id", "user_name"));

        return view("welcome");
    }


    public function profile()
    {
        $CurrentUserId = Auth::user()->id;
        $CurrentUserFirstName = Auth::user()->first_name;
        $CurrentUserLastName = Auth::user()->last_name;
        $CurrentUserEmail = Auth::user()->email;

        // dd($CurrentUserFirstName);

        // $posts = DB::table('post')
        // ->leftJoin('post', 'users.id', '=', 'post.id')
        // ->select('tweet',)
        // ->get();

        $posts = DB::table("post")->whereBetween('id', [8, 12])->get();



        return view("profile", compact('posts', 'CurrentUserId', 'CurrentUserFirstName', 'CurrentUserLastName', 'CurrentUserEmail'));
    }

    public function editProfile()
    {
        return view("editProfile");
    }


    public function registerUser()
    {
        return view("register");
        // return 'hi';
    }

    public function registrationPost(Request $request, FlasherInterface $flasher)
    {
        $user = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'bio' => $request->bio,
        ];

        DB::table("users")->insert($user);

        $flasher->addSuccess("Registration Successful");

        return redirect()->route('login');
    }

    public function signIn()
    {
        return view("login");
    }


    public function form()
    {
        return view("form");
    }

    public function testMethod(){
        //
    }
}