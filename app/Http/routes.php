<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [
        'as'   => 'eat.index',
        'uses' => 'EatController@index',
    ]);

    Route::get('create', [
        'as'   => 'eat.create',
        'uses' => 'EatController@create',
    ]);

    Route::post('eat', [
        'as'   => 'eat.store',
        'uses' => 'EatController@store',
    ]);

    Route::get('eat/{eat}/edit', [
        'as'   => 'eat.edit',
        'uses' => 'EatController@edit',
    ]);

    Route::put('eat/{eat}', [
        'as'   => 'eat.update',
        'uses' => 'EatController@update',
    ]);
});
