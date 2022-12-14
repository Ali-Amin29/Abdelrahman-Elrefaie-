<?php

use Illuminate\Support\Facades\Route;

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
Route::get('index',function(){
    return view('welcome');
})->name('index');



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
