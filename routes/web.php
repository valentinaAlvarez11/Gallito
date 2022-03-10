<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


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

//Publicas

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/u/{user}', [PostController::class, 'index'])->name('user.posts');

//Privadas

Route::middleware(['auth'])->group(function (){
    Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

    Route::get('/users/view', [UserController::class, 'index']);

    Route::resource('users', UserController::class)
    ->except(['index']);

    Route::resource('posts', PostController::class)
    ->except(['index'])->middleware('auth');

});


