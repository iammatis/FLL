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
    'uses' => 'DashboardController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

Route::get('/teamsOverlook', [
    'uses' => 'TeamsController@getTeamsOverlook',
    'as' => 'teams_overlook',
    'middleware' => 'auth'
]);

Route::get('/teamsAdministration', [
    'uses' => 'TeamsController@getTeamsAdministration',
    'as' => 'teams_administration',
    'middleware' => 'auth'
]);

Route::get('/datesOverlook', [
    'uses' => 'DatesController@getDatesOverlook',
    'as' => 'datesOverlook',
    'middleware' => 'auth'
]);

Route::get('/usersOverlook', [
    'uses' => 'UserController@getUsersOverlook',
    'as' => 'usersOverlook',
    'middleware' => 'auth'
]);

Route::get('/usersAddUser', [
    'uses' => 'UserController@getUsersAddUser',
    'as' => 'usersAddUser',
    'middleware' => 'auth'
]);

Route::get('/newsOverlook', [
    'uses' => 'NewsController@getNewsOverlook',
    'as' => 'newsOverlook',
    'middleware' => 'auth'
]);

Route::get('/newsAddNews', [
    'uses' => 'NewsController@getNewsAddNews',
    'as' => 'newsAddNews',
    'middleware' => 'auth'
]);

Route::get('/kitsOverlook', [
    'uses' => 'KitsController@getkitsOverlook',
    'as' => 'kitsOverlook',
    'middleware' => 'auth'
]);

Route::get('/kitsSendKit', [
    'uses' => 'KitsController@getkitsSendKit',
    'as' => 'kitsSendKit',
    'middleware' => 'auth'
]);

Route::get('/invoicesOverlook', [
    'uses' => 'InvoicesController@getInvoicesOverlook',
    'as' => 'invoicesOverlook',
    'middleware' => 'auth'
]);

// TODO: Code Bellow needs Revision!
//
//Route::get('/coach_form', [
//    'uses' => 'CoachController@getCoachForm',
//    'as' => 'coach_form',
//    'middleware' => 'auth'
//]);
//
//Route::get('/team_form', [
//    'uses' => 'TeamController@getTeamForm',
//    'as' => 'team_form',
//    'middleware' => 'auth'
//]);
//
//Route::get('/id_assign', [
//    'uses' => 'AdminController@getIdAssign',
//    'as' => 'id_assign',
//    'middleware' => 'auth'
//]);
//
//Route::get('/teams', [
//    'uses' => 'AdminController@getTeams',
//    'as' => 'teams',
//    'middleware' => 'auth'
//]);

/* End of III. */