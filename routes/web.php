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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//ruta home
Route::get('/home', [HomeController::class, 'index'])->name('home');

//ruta usuario especifico
Route::get('u/{user}', [PostController::class, 'index'])->name('user.posts');
//ruta listado de usuarios
Route::get('/users/view', [UserController::class, 'index']);

Route::resource('users', UserController::class)->except(['index']);

Route::resource('posts', PostController::class)->except(['index']);


