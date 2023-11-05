<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController1 extends Controller
{
    public function form()
    {
        return view("form2.form1");
    }

    public function form1()
    {
        // $data = $request->all();
        // dd($data);
        // $request->session()->put("data", $data);
        // return view("form2.form2", compact("data"));
        // return view("form2.form1");
        // return redirect()->away("https://webnewsdesign.com");
        return view("form2.form1");
    }


    public function form2(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $request->session()->put("data", $data);
        return view("form2.form2", compact("data"));
    }

    public function form3(Request $request)
    {
        $data = $request->all();
        $request->session()->put("data", $data);
        return view("form2.form3", compact("data"));
    }

    public function formFinal(Request $request)
    {
        // $data = $request->all();
        // dd($data);
        $data = $request->session()->get("data", []) ;
        return view("form2.formFinal", compact("data"));
    }
} 