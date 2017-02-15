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
    return view('welcome');
})->name('home');

/* I. Users Sign up and Sign in and Logout */
Route::post('/signup', [
   'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
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
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::get('/coach_form', [
    'uses' => 'CoachController@getCoachForm',
    'as' => 'coach_form',
    'middleware' => 'auth'
]);

Route::get('/team_form', [
    'uses' => 'TeamController@getTeamForm',
    'as' => 'team_form',
    'middleware' => 'auth'
]);

Route::get('/id_assign', [
    'uses' => 'AdminController@getIdAssign',
    'as' => 'id_assign',
    'middleware' => 'auth'
]);

Route::get('/teams', [
    'uses' => 'AdminController@getTeams',
    'as' => 'teams',
    'middleware' => 'auth'
]);

/* End of III. */