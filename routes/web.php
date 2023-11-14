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

Route::get('/', [PostControllerFinal::class, 'index'])->middleware('auth');

Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('edit/profile', [HomeController::class, 'editProfile'])->name('editProfile');
Route::get('registerUser', [HomeController::class, 'registerUser'])->name('registerUser');
Route::post('registrationPost', [HomeController::class, 'registrationPost'])->name('registrationPost');
Route::get('signIn', [HomeController::class, 'signIn'])->name('login');
Route::post('customLogin', [CustomAuthController::class, 'customLogin'])->name('customLogin');

Route::get('/signOut', [FormController::class, 'signOut'])->name('signOut');
Route::get('/form1', [FormController1::class, 'form1'])->name('form1');


Route::post('/form2', [FormController1::class, 'form2'])->name('form2');
Route::post('/form3', [FormController1::class, 'form3'])->name('form3');
Route::post('/formFinal', [FormController1::class, 'formFinal'])->name('formFinal');

Route::get('/form2', [
    FormController1::class, 'showForm2'
])->name('form2.show');



// Route::update('/user-update', [ProfileController::class, 'update'])->name('update');
Route::post('/user-update', [CustomAuthController::class, 'update'])->name('update');

Route::resource('/posts', PostControllerFinal::class);

Route::get('/posts/{id}', [PostControllerFinal::class, 'show'])->name('show');
Route::get('profiles/{id}', [PostControllerFinal::class, 'singleProfile'])->name('singleProfile');



Route::get('posts/update/{id}', [PostControllerFinal::class,'editPost'])->name('editPost');