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

Route::get('/', 'UserListController@getUserList');

Route::get('/home', 'UserListController@getBrgyList');

Route::get('/login', 'UserListController@formlist');

Route::get('/signup', 'UserListController@signup');

Route::get('/example', function () {
    return '/example';
});
