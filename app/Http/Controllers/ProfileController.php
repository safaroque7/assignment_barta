<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return response()->json($request->user()->only('name', 'email'));
    }

    // public function update(){[
    //     'name' => ['required', 'string'],
    //     'email'=> ['required','email', Role::unique('users')->ignore(auth()->user())],
    // ]}
}