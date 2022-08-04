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

use App\Http\Controllers\PenggunaController;

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function (){
    Route::get('pengguna', 'PenggunaController@index')->name('pengguna.index');
    Route::get('pengguna/create', 'PenggunaController@create')->name('pengguna.create');
    Route::post('pengguna/store', 'PenggunaController@store')->name('pengguna.store');
    Route::get('pengguna/edit/{id}', 'PenggunaController@edit')->name('pengguna.edit');
    Route::post('pengguna/update/{id}', 'PenggunaController@update')->name('pengguna.update');
    Route::post('pengguna/delete/{id}', 'PenggunaController@destroy')->name('pengguna.delete');
    Route::get('pengguna/download_pdf', 'PenggunaController@downloadPDF')->name('download_pdf');
    Route::get('export_excel', 'PenggunaController@export_excel')->name('pengguna_excel'); 
    Route::get('home', 'PenggunaController@index')->name('pengguna.index');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function (){
    Route::get('user', 'HomeController@index')->name('user.index');
    Route::post('user/delete/{id}', 'HomeController@destroy')->name('user.delete');
});