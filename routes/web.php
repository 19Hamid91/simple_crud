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

// // Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// // Registration Routes...
//         if ($options['register'] ?? true) {
//             $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//             $this->post('register', 'Auth\RegisterController@register');}
// // Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// // Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// // Confirm Password (added in v6.2)
// Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
// Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// // Email Verification Routes...
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
// /* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
// Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

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