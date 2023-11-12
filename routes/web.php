<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\FormController1;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostControllerFinal;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get(
//     '/',
//     function () {
//         return view('welcome');
//     }
// );

// Route::get('/', [PostControllerFinal::class, 'index']);
// Route::get('/', function(){
//     // $users = DB::table('users')->find(2, ['id', 'first_name','email']);
//     // $users = DB::table('users')->count();
//     // dd($users);
//     return view('welcome');
// });

Route::get('/', function () {
    $posts = DB::table('users')
        ->leftJoin('post', 'users.id', '=', 'post.id')
        ->get();

        // dd($posts);

    return view('welcome', compact('posts'));
});

Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('edit/profile', [HomeController::class, 'editProfile'])->name('editProfile');
Route::get('registerUser', [HomeController::class, 'registerUser'])->name('registerUser');
Route::post('registrationPost', [HomeController::class, 'registrationPost'])->name('registrationPost');
Route::get('signIn', [HomeController::class, 'signIn'])->name('signIn');
Route::post('customLogin', [CustomAuthController::class, 'customLogin'])->name('customLogin');


// Route::get('/', function () {
//     session()->put('name', 'Saiful Alam Faroque Akash');
//     // session()->put('name', 'S A Faroque');
//     // session(['team' => ['Faroque', 'Kamal', 'jamal']]);
//     // session()->put(['theme' => ['light', 'dark']]);
//     // session()->push("team", "hannan");
//     // session()->get("theme");
//     // session()->flush();

//     // $hasSession = session()->has('name');
//     // dd(session()->has('name'));
//     // dd(session()->missing('name'));
//     // return view("welcome");
//     // Route::get("/save", fn() => session()->put("country", "India"));
// });

// // Route::get('/save', fn () => session()->put('country', 'Bangladesh'));
// // Route::get('/', function () {
// //     // echo session()->pull("country");
// //     echo 'Total visitor ' . session()->increment('visitors', 5) . "<br>";

// //     echo 'Total visitor ' . session()->decrement('negativeVisitor', 2);
// // });


// // Route::get('/', function () {
// //     return view('form');
// // });

// Route::post('/save', function () {

//     // Save the email to database

//     //Return to the form with success Message

//     session()->flash('status', 'Your email address has been saved successfully');

//     return redirect("/");
// });


// Route::get('/', [FormController::class, 'showStep'])->name('step1');
// Route::match(['GET', 'POST'], '/step2', [FormController::class, 'showStep2'])->name('step2');
// Route::post('/submit', [FormController::class, 'submitForm'])->name('final_step');
// Route::get('/form-success', [FormController::class, 'showSuccessPage'])->name('success');
// Route::get('/reset', [FormController::class, 'resetForm'])->name('reset');
Route::get('/signOut', [FormController::class, 'signOut'])->name('signOut');
Route::get('/form1', [FormController1::class, 'form1'])->name('form1');


Route::post('/form2', [FormController1::class, 'form2'])->name('form2');
Route::post('/form3', [FormController1::class, 'form3'])->name('form3');
Route::post('/formFinal', [FormController1::class, 'formFinal'])->name('formFinal');

Route::get('/form2', [
    FormController1::class, 'showForm2'
])->name('form2.show');

// Route::get('/', [HomeController::class, 'index']);

// Route::update('/user-update', [ProfileController::class, 'update'])->name('update');
Route::post('/user-update', [CustomAuthController::class, 'update'])->name('update');

Route::resource('/posts', PostControllerFinal::class);



$friends = ['kamal', 'jamal', 'obaydul', 'hannan'];

// dd(Arr::last($friends));
// dd(Arr::first($friends));
// dd(Arr::random($friends));
// dd(Arr::shuffle($friends));
// dd(Arr::join($friends, '❤'));
// dd(Arr::join($friends, ', ', ' and '));