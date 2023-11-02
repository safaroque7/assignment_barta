<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('editProfile', [HomeController::class, 'editProfile'])->name('editProfile');
Route::get('registerUser', [HomeController::class, 'registerUser'])->name('registerUser');
Route::post('registrationPost', [HomeController::class, 'registrationPost'])->name('registrationPost');
Route::get('signIn', [HomeController::class, 'signIn'])->name('signIn');
Route::post('customLogin', [CustomAuthController::class, 'customLogin'])->name('customLogin');