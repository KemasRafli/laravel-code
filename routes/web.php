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

Route::get('/', function () {
    return view('welcome');
});
/*Materi 1 - Pengenalan Routing
Routing itu seperti rute di darat, air, udara
dan routing dapat memanggil controller.
Routing juga dapat langsung mencetak ke layar browser*/

Route::get('/halo', function(){
    return "Halo Dunia LARAVEL";
});
Route::get('/materi1', function(){
    return view ('materi1');;
});

Route::get('/blade1', function(){
    return view ('blade1');;
});

Route::get('/about', function(){
    return view ('about');;
});

Route::get('/portofolio', function(){
    return view ('portofolio');;
});

Route::get('/beranda', function(){
    return view ('beranda');;
});

Route::get('/profile', function(){
    return view ('profile');;
});

Route::get('/artikel', function(){
    return view ('artikel');;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
