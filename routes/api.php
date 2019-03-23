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

## ROUTES untuk Users ##
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

//## ROUTES untuk Articles ##//
# List articles
Route::get('articles', 'ArticleController@index');
# List single article
Route::get('articles/{id}', 'ArticleController@show');
# Create new article
Route::post('articles', 'ArticleController@store');
# Update article
Route::put('articles', 'ArticleController@store');
# Delete article
Route::delete('articles/{id}', 'ArticleController@destroy');