<?php

use Illuminate\Support\Arr;
use App\Http\Controllers\Clients;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\FormController1;
use App\Http\Controllers\CommentsCtroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentsController;
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

Route::middleware('auth')->group(function () {

    Route::controller(PostControllerFinal::class)->group(function () {
        Route::get('/', 'index');
        Route::post('/posts', 'storePost')->name('posts.store');
        Route::get('/posts/{id}', 'show')->name('show');
        Route::get('profiles/{id}', 'singleProfile')->name('singleProfile');
        Route::get('posts/edit/{id?}', 'editPost')->name('post.edit');
        Route::post('posts/update/{id?}', 'update')->name('post.update');
        Route::get('delete/{id}', 'destroy')->name('delete');
        Route::get('/signOut', 'signOut')->name('signOut');
    });

    Route::controller(HomeController::class)->group(function () {
        Route::get('profile', 'profile')->name('profile');
        Route::get('edit/profile', 'editProfile')->name('editProfile');
        Route::post('/user-update', 'update')->name('update');
    });

});
Route::get('registerUser', [HomeController::class, 'registerUser'])->name('registerUser');
Route::post('registrationPost', [HomeController::class, 'registrationPost'])->name('registrationPost');
Route::get('signIn', [HomeController::class, 'signIn'])->name('login');
Route::post('customLogin', [CustomAuthController::class, 'customLogin'])->name('customLogin');
Route::get('/form1', [FormController1::class, 'form1'])->name('form1');
Route::post('/form2', [FormController1::class, 'form2'])->name('form2');
Route::post('/form3', [FormController1::class, 'form3'])->name('form3');
Route::post('/formFinal', [FormController1::class, 'formFinal'])->name('formFinal');
Route::get('/form2', [FormController1::class, 'showForm2'])->name('form2.show');


// Route::post('/posts', [CommentsController::class, 'storeComments'])->name('comments.store');








































// Route::get('search/', [PostControllerFinal::class, 'search'])->name('search');


// Route::get('/user/{name}', function(?string $name=null){
//     return $name;
// });

// Route::get('/user/{name?}', function(?string $name = 'S A Faroque'){
//     return $name;
// // });

// Route::get('/category/{category}', function (string $category) {
//     return $category;
// })->wherein('category', ['movie', 'song', 'painting']);