<?php

// Default Route
Route::get('/', function () {
    return view('login');
})->name('home');

/* I. Users Sign up and Sign in and Logout */

Route::post('/admin/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::get('/admin/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);

/* End of I. */

/* III. Views */
Route::get('/admin/dashboard', [
    'uses' => 'DashboardController@index',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::get('/admin/teams', [
    'uses' => 'TeamsController@index',
    'as' => 'teams/index',
    'middleware' => 'auth'
]);

Route::get('/admin/teams/all', [
    'uses' => 'TeamsController@all',
    'as' => 'teams/all',
    'middleware' => 'auth'
]);

Route::get('/admin/dates', [
    'uses' => 'DatesController@index',
    'as' => 'dates',
    'middleware' => 'auth'
]);

Route::post('/admin/dates/update/{date}', [
    'uses' => 'DatesController@update',
    'as' => 'datesUpdate',
    'middleware' => 'auth'
]);

Route::get('/admin/users', [
    'uses' => 'UserController@index',
    'as' => 'users/index',
    'middleware' => 'auth'
]);

Route::get('/admin/users/create', [
    'uses' => 'UserController@create',
    'as' => 'users/create',
    'middleware' => 'auth'
]);

Route::get('/admin/news', [
    'uses' => 'NewsController@index',
    'as' => 'news/index',
    'middleware' => 'auth'
]);

Route::get('/admin/news/create', [
    'uses' => 'NewsController@create',
    'as' => 'news/create',
    'middleware' => 'auth'
]);

Route::get('/admin/kits', [
    'uses' => 'KitsController@index',
    'as' => 'kits/index',
    'middleware' => 'auth'
]);

Route::get('/admin/kits/store', [
    'uses' => 'KitsController@store',
    'as' => 'kits/store',
    'middleware' => 'auth'
]);

Route::get('/admin/invoices', [
    'uses' => 'InvoicesController@index',
    'as' => 'invoices/index',
    'middleware' => 'auth'
]);