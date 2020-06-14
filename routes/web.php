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

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'layouts/app')->name('dashboard');
});

Route::view('users', 'layouts/app')->name('users');

Route::prefix('zoning')->group(function () {
    Route::view('add', 'layouts/app')->name('add_zoning');
    Route::view('endorse', 'layouts/app')->name('endorse_zoning');
    Route::view('approve', 'layouts/app')->name('approve_zoning');
});

Route::view('land-use', 'layouts/app')->name('land_use');

Route::prefix('business')->group(function () {
    Route::view('add', 'layouts/app')->name('add_business');
    Route::view('approve', 'layouts/app')->name('approve_business');
});

Route::view('payment', 'layouts/app')->name('payment');

Route::get('/home', 'HomeController@index')->name('home');
