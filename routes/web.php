<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\CartController;


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
Route::get('blogs',[FrontController::class,'Blog'])->name('blogs');


Route::get('show_blog/{id}',[FrontController::class,'show_blog'])->name('show_blog');
Route::get('team_show/{id}',[FrontController::class,'team_show'])->name('team_show');

// constultant

Route::get('about', function () {
    return view('about');
})->name('about');

// constultant
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('delete/{id}', [CartController::class, 'delete'])->name('delete');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('session', [CartController::class, 'session'])->name('session');
Route::get('session_done', [CartController::class, 'session_done'])->name('session_done');
Route::get('paymentSend', [App\Http\Controllers\PaymentController::class,'payment'])->name('paymentSend');



Route::get('getData',  [App\Http\Controllers\UserConstultantController::class,'create']);


Route::post('complain',  [App\Http\Controllers\UserComplainController::class,'create'])->name('complain');


Route::get('/register',function(){

    return "kjhkl";
});



// ///////////////////////////////FRONT HOME////////////////////////////////////




















Route::view('admin', 'Dashbord.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
