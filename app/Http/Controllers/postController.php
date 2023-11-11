<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{
    public function post(Request $request)
    {

        $request->validate([
            "tweet" => 'required|min:1',
        ]);

        $data = [
            "tweet" => $request->tweet,
        ];

        DB::table("post")->insert($data);

        $posts = DB::table("post")->orderBy('id', 'desc')->get();

        return view("welcome", compact('posts'));
    }
}