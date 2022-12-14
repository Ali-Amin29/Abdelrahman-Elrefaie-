<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

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

Route::get('/',[FrontController::class,'index'])->name('index');

// ///////////////////////////////FRONT HOME////////////////////////////////////

// blog routes
Route::get('blog',[FrontController::class,'Blog'])->name('blog');
Route::get('show_blog/{id}',[FrontController::class,'show_blog'])->name('show_blog');




// ///////////////////////////////FRONT HOME////////////////////////////////////













Route::get('rtl', function () {
    return view('Dashbord.index2');
});

Route::view('admin', 'Dashbord.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
