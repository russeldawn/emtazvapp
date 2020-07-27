<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'API\AuthController@login');



Route::group(['middleware' => 'auth:api'], function ()
{
	Route::namespace('API')->group( function ()
	{
		Route::get('me', 'AuthController@me');
		Route::get('logout', 'AuthController@logout');

		Route::post('dashboard', 'DashboardController@show');

		Route::apiResource('users', 'UserController');
		Route::apiResource('transaction', 'TransactionController');
		Route::apiResource('barangay', 'BarangayController');

	});

});
