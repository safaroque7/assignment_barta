<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                ->withSuccess('Signed in');
        }

        return back()->with('error', 'username or password is not correct');
    }

    public function update(Request $request)
    {
        // dd('Hi how are you');

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'bio' => 'required',
        ])->validated();

        //    $user = Auth::user();
        //    $user->first_name = $request['first_name'];    
        //    $user->last_name = $request['last_name'];
        //    $user->email = $request['email'];
        //    $user->password = bcrypt($request['password']);
        //    $user->save();
        //    return back()->with('success','Profile Updated');

        dd($validated);

        $user = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'bio' => $request->bio,
        ];

        $updatedData = DB::table("users")->update($user);
        dd($updatedData);

        return redirect()->route('signIn');
    }
}
