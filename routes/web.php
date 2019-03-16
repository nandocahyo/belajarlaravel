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

Route::resource('kategori','KategoriController');
Route::get('kategori','KategoriController@index');


//belajar blade
Route::get('/bladetem', function () {
    return view('layouts.master');
});

//templating admin
Route::get('/admin', function () {
    return view('admin.template');
});

//tempalte kategori
Route::get('/temkat', function () {
    return view('kategori.KategoriController');
});