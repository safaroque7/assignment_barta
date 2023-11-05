<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showStep()
    {
        return view("form.step1");
    }

    public function showStep2(Request $request)
    {
        $data = $request->all();
        // dd(compact("data"));
        
        $request->session()->put("form_data", $data);

        return view("form.step2", compact("data"));
    }

    public function submitForm(Request $request)
    {
        $data = $request->session()->get("form_data", []);
        $data['email'] = $request->input('email');

        $request->session()->put('form_data', $data);
        // $request->session()->flash('status', 'Form Submission Successful!');

        return to_route('success');
    }

    public function showSuccessPage(Request $request)
    {
        // get all the data from session
        $data = $request->session()->get('form_data', []);
        return view('form.success', compact('data'));
    }

    public function resetForm(Request $request)
    {
        session()->flush();
        return to_route('step1');
    }

    public function signOut()
    {
        // session()->flush();
        session()->invalidate();
        return to_route('signIn');
    }
}
