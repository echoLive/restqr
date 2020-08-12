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
    return view('welcome-pt');
});

Route::get('/home-pt', function() {
    return view('welcome-pt');
});

Route::get('/home-en', function () {
    return view('welcome-en');
});

Route::get('/home-pt-mobile', function() {
    return view('welcome-pt-mobile');
});

Route::get('/home-en-mobile', function () {
    return view('welcome-en-mobile');
});

Route::get('lang/{locale}', 'HomeController@lang');

Route::get('login/lang/{locale}', 'Auth\LoginController@lang');

Route::get('password/reset/lang/{locale}', 'Auth\ForgotPasswordController@lang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

