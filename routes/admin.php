<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\IndexController;
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







Route::get('complain',  [App\Http\Controllers\UserComplainController::class,'show'])->name('index.complain');
Route::get('complain/done',  [App\Http\Controllers\UserComplainController::class,'done'])->name('done');
Route::get('complain/edit/{id}',  [App\Http\Controllers\UserComplainController::class,'edit'])->name('complain.edit');
Route::put('complain/udpate/{id}',  [App\Http\Controllers\UserComplainController::class,'update'])->name('complain.update');


Route::get('consultant',  [App\Http\Controllers\UserConstultantController::class,'show']);










Route::middleware(['auth'])->group(function () {

    Route::get('/',[IndexController::class,'index']);

   Route::resource('blog', BlogController::class);
   Route::resource('video', VideosController::class);
   Route::resource('user', UserController::class);
   Route::resource('team', TeamController::class);

   });
   Auth::routes();

   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

   Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistratio'])->name('register');

   Auth::routes();

   Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
