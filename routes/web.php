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
Route::get('blog',[FrontController::class,'Blog'])->name('blog');
Route::get('show_blog/{id}',[FrontController::class,'show_blog'])->name('show_blog');
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





// ///////////////////////////////FRONT HOME////////////////////////////////////












Route::get('/teams',function(){
    return view('Dashbord/team/index');
})->name('index');

Route::get('/teams/create',function(){
    return view('Dashbord/team/create');
})->name('teams.create');
Route::get('/teams/{id}',function($id){

    return app\Models\Team::find($id);
    // view('Dashbord/team/show');
})->name('teams.show');
Route::get('/teams/update',function(){
    return view('Dashbord/team/update');
})->name('teams.update');





Route::get('rtl', function () {
    return view('Dashbord.index2');
});

Route::view('admin', 'Dashbord.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');