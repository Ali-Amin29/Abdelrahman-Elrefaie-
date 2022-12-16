<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
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

 Route::get('/',function()
 {
    return view('Dashbord.index');
 });


Route::resource('blog', BlogController::class);
Route::get('complain',  [App\Http\Controllers\UserComplainController::class,'show'])->name('index');
Route::get('complain/done',  [App\Http\Controllers\UserComplainController::class,'done'])->name('done');
Route::get('complain/edit/{id}',  [App\Http\Controllers\UserComplainController::class,'edit'])->name('complain.edit');
Route::put('complain/udpate/{id}',  [App\Http\Controllers\UserComplainController::class,'update'])->name('complain.update');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
