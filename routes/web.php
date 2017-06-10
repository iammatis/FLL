<?php

Route::get('/', [
    'uses' => 'WebController@index'
    // 'as' => 'web/index',
])->name('home');

Route::get('/admin', function () {
    return view('admin.login');
})->name('adminLogin');

Route::post('signin', array('uses' => 'SessionController@postSignInAdmin', 'as' => 'signinAdmin'));
Route::post('signup', array('uses' => 'SessionController@postSignUpAdmin', 'as' => 'signupAdmin'));
Route::get('logoutAdmin', array('uses' => 'SessionController@getLogoutAdmin', 'as' => 'logoutAdmin'));

// ****************************************************** ADMIN ROUTES ******************************************************

Route::group([
    'middleware' => ['auth', 'role:admin|editor'],
    'prefix' => 'admin'
    ], function () {

    Route::get('dashboard', array('uses' => 'DashboardController@index', 'as' => 'dashboard'));

    Route::get('teams/index', array('uses' => 'TeamsController@index', 'as' => 'teams/index'));
    Route::get('teams/all', array('uses' => 'TeamsController@all', 'as' => 'teams/all'));

    Route::patch('dates/patch', array('uses' => 'DatesController@patch', 'as' => 'dates/patch'));
    Route::delete('dates/delete/{date}', array('uses' => 'DatesController@delete', 'as' => 'dates/delete'));

    Route::get('users', array('uses' => 'UserController@index', 'as' => 'users/index'));
    Route::get('users/create', array('uses' => 'UserController@create', 'as' => 'users/create'));

    Route::get('news', array('uses' => 'NewsController@index', 'as' => 'news/index'));
    Route::get('news/create', array('uses' => 'NewsController@create', 'as' => 'news/create'));
    Route::post('news/post', array('uses' => 'NewsController@post', 'as' => 'news/post'));
    Route::get('news/edit/{news}', array('uses' => 'NewsController@edit', 'as' => 'news/edit'));
    Route::patch('news/patch/{news}', array('uses' => 'NewsController@patch', 'as' => 'news/patch'));
    Route::get('news/delete/{news}', array('uses' => 'NewsController@delete', 'as' => 'news/delete'));

    Route::get('kits', array('uses' => 'KitsController@index', 'as' => 'kits/index' ));
    Route::patch('kits/patch/{kit}', array('uses' => 'KitsController@patch', 'as' => 'kits/patch'));
    Route::patch('patchKitsLeft', array('uses' => 'AditionalsController@patchKitsLeft', 'as' => 'patchKitsLeft'));

    Route::get('invoices', array('uses' => 'InvoicesController@index', 'as' => 'invoices/index'));
    Route::patch('invoices/patch/{invoice}', array('uses' => 'InvoicesController@patch', 'as' => 'invoices/patch'));

    Route::post('id/store', array('uses' => 'IDsController@store', 'as' => 'id/store'));

    Route::get('export', array('uses' => 'ExportController@export', 'as' => 'export'));

    Route::patch('regions/patch', array('uses' => 'RegionsController@patch', 'as' => 'regions/patch'));
    Route::get('regions/delete/{region}', array('uses' => 'RegionsController@delete', 'as' => 'regions/delete'));

    Route::get('tournaments/index', array('uses' => 'TournamentsController@index', 'as' => 'tournaments/index'));
    Route::get('tournaments/archive', array('uses' => 'TournamentsController@archive', 'as' => 'tournaments/archive'));
    Route::get('tournaments/settings', array('uses' => 'TournamentsController@settings', 'as' => 'tournaments/settings'));
    Route::post('tournaments/new', array('uses' => 'TournamentsController@new', 'as' => 'tournaments/new'));

    Route::get('sites/index', array('uses' => 'SitesController@index', 'as' => 'sites/index'));
    Route::get('sites/edit/{site}', array('uses' => 'SitesController@edit', 'as' => 'sites/edit'));
    Route::patch('sites/patch/{site}', array('uses' => 'SitesController@patch', 'as' => 'sites/patch'));
    Route::get('sites/create', array('uses' => 'SitesController@create', 'as' => 'sites/create'));
    Route::post('sites/post', array('uses' => 'SitesController@post', 'as' => 'sites/post'));
    Route::get('sites/delete/{site}', array('uses' => 'SitesController@delete', 'as' => 'sites/delete'));

});

// ****************************************************** WEB ROUTES ******************************************************

Route::group([
    'middleware' => 'auth'
    ], function() {
    Route::get('settings/{user}', array('uses' => 'CoachController@settings', 'as' => 'settings'));

    Route::get('coach/create', array('uses' => 'CoachController@create', 'as' => 'coach/create'));
    Route::post('coach/store', array('uses' => 'CoachController@store', 'as' => 'coach/store'));
    Route::get('coach/show/{user}', array('uses' => 'CoachController@show', 'as' => 'coach/show'));
    Route::post('coach/edit/{user}', array('uses' => 'CoachController@edit', 'as' => 'coach/edit'));

    Route::get('user/show', array('uses' => 'UserController@show', 'as' => 'user/show'));
    Route::post('user/edit', array('uses' => 'UserController@edit', 'as' => 'user/edit'));
    Route::get('user/pass', array('uses' => 'UserController@showPassword', 'as' => 'user/pass'));
    Route::post('user/editPass', array('uses' => 'UserController@editPassword', 'as' => 'user/editPass'));

    Route::get('team/create', array('uses' => 'TeamController@create', 'as' => 'team/create'));
    Route::get('team/show/{team}', array('uses' => 'TeamController@show', 'as' => 'team/show'));
    Route::post('team/edit/{team}', array('uses' => 'TeamController@edit', 'as' => 'team/edit'));
    Route::post('team/store', array('uses' => 'TeamController@store', 'as' => 'team/store'));

    Route::get('member/delete/{member}', array('uses' => 'TeamController@delete', 'as' => 'member/delete'));

    Route::post('tournament/register/{team}', ['uses' => 'TournamentsController@register', 'as' => 'tournament/register']);

});

Route::get('logout', array('uses' => 'SessionController@getLogout', 'as' => 'logout'));
Route::post('login', array('uses' => 'SessionController@postSignIn', 'as' => 'login'));
Route::get('user/register', array('uses' => 'UserController@register', 'as' => 'user/register'));
Route::post('user/registerPost', array('uses' => 'SessionController@postSignUp', 'as' => 'user/registerPost'));

// Route::get('sites/{year}/{child}', ['uses' => 'SitesController@show', 'as' => 'sites']);
Route::get('sites/team/{year}', ['uses' => 'SitesController@showTeam', 'as' => 'sites/team']);
Route::get('sites/calendar', ['uses' => 'SitesController@showCalendar', 'as' => 'sites/calendar']);
Route::get('sites/{year}/{id}', ['uses' => 'SitesController@show', 'as' => 'sites']);

Route::get('news/show/{news}', array('uses' => 'NewsController@show', 'as' => 'news/show'));

Route::get('aboutfll', function() { return view('web.aboutfll'); })->name('aboutfll');
Route::get('general/team', array('uses' => 'GeneralsController@team', 'as' => 'general/team'));
Route::get('general/conditions', array('uses' => 'GeneralsController@conditions', 'as' => 'general/conditions'));
Route::get('general/regions', array('uses' => 'GeneralsController@regions', 'as' => 'general/regions'));
