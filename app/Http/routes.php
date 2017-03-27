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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// View all tasks
Route::get('/tasks', 'TaskController@index');
Route::get('/today', 'TaskController@today');
Route::get('/tomorrow', 'TaskController@tomorrow');
Route::get('/nextweek', 'TaskController@nextweek');
Route::get('/nextmonth', 'TaskController@nextmonth');
Route::get('/someday', 'TaskController@someday');

// Creating tasks
Route::get('/create', 'TaskController@create');
Route::get('tasks/{id}', 'TaskController@show');

// Store a new task
Route::post('tasks', 'TaskController@store');
//Route::delete('/task/{task}', 'TaskController@destroy');