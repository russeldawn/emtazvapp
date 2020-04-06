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

Route::get('/', 'LoginController@showLoginForm');
Route::post('/', 'LoginController@login');

Route::get('/dashboard', 'UserInformationController@get_user_info')->middleware('auth:api');

Route::get('/', 'UserListController@formlist')->name('login');

Route::get('/layout', 'DashboardController@index');

Route::get('/layout/header', 'DashboardController@header');

Route::get('/signup', 'UserListController@signup');

Route::get('/example', 'UserListController@getUserList');

// Auth::routes();