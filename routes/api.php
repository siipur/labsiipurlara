<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List users
Route::get('users', 'UserController@index');

// List single Users
Route::get('users/{id}', 'UserController@show');

// Create new Users
Route::post('users', 'UserController@store');

// Update Users
Route::put('users', 'UserController@store');

// Delete Users
Route::delete('users/{id}', 'UserController@destroy');
