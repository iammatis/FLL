<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Default Route
Route::get('/', function () {
    return view('login');
})->name('home');

/* I. Users Sign up and Sign in and Logout */

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);

/* End of I. */

/* II. Team and coach Creation */
Route::post('/create_coach', [
    'uses' => 'CoachController@createCoach',
    'as' => 'create_coach',
    'middleware' => 'auth'
]);

Route::post('/create_team', [
    'uses' => 'TeamController@createTeam',
    'as' => 'create_team',
    'middleware' => 'auth'
]);

/* End of II. */

/* III. Views */
Route::get('/dashboard', [
    'uses' => 'DashboardController@index',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::get('/teams', [
    'uses' => 'TeamsController@index',
    'as' => 'teams/index',
    'middleware' => 'auth'
]);

Route::get('/teams/all', [
    'uses' => 'TeamsController@all',
    'as' => 'teams/all',
    'middleware' => 'auth'
]);

Route::get('/dates', [
    'uses' => 'DatesController@index',
    'as' => 'dates',
    'middleware' => 'auth'
]);

Route::post('/dates/update/{date}', [
    'uses' => 'DatesController@update',
    'as' => 'datesUpdate',
    'middleware' => 'auth'
]);

Route::get('/users', [
    'uses' => 'UserController@index',
    'as' => 'users/index',
    'middleware' => 'auth'
]);

Route::get('/users/create', [
    'uses' => 'UserController@create',
    'as' => 'users/create',
    'middleware' => 'auth'
]);

Route::get('/news', [
    'uses' => 'NewsController@index',
    'as' => 'news/index',
    'middleware' => 'auth'
]);

Route::get('/news/create', [
    'uses' => 'NewsController@create',
    'as' => 'news/create',
    'middleware' => 'auth'
]);

Route::get('/kits', [
    'uses' => 'KitsController@index',
    'as' => 'kits/index',
    'middleware' => 'auth'
]);

Route::get('/kits/store', [
    'uses' => 'KitsController@store',
    'as' => 'kits/store',
    'middleware' => 'auth'
]);

Route::get('/invoices', [
    'uses' => 'InvoicesController@index',
    'as' => 'invoices/index',
    'middleware' => 'auth'
]);