<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/profil', function(){
    return "ini adalah profil siswa";
})->name('profil');

Route::get("/tesname", function(){
    return route('profil');
});

Route::get('/profil/{id}', function($id){
    return $id;
});

Route::get("/tescontroller", "TesController@show");

Route::resource('siswa', "SiswaController");