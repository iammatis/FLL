<?php

Route::get('/', [
    'uses' => 'WebController@index'
    // 'as' => 'web/index',
])->name('home');

Route::get('/admin', function () {
    return view('admin.login');
})->name('adminLogin');

Route::post('signin', array('uses' => 'SessionController@postSignInAdmin', 'as' => 'signinAdmin'));
// Route::post('signup', array('uses' => 'SessionController@postSignUpAdmin', 'as' => 'signupAdmin'));
Route::get('logoutAdmin', array('uses' => 'SessionController@getLogoutAdmin', 'as' => 'logoutAdmin'));

// ****************************************************** ADMIN ROUTES ******************************************************

Route::group([
    'middleware' => ['auth', 'role:admin|editor'],
    'prefix' => 'admin'
    ], function () {

    // Route::post('signin', array('uses' => 'SessionController@postSignInAdmin', 'as' => 'signinAdmin'));
    // Route::post('signup', array('uses' => 'SessionController@postSignUpAdmin', 'as' => 'signupAdmin'));
    // Route::get('logout', array('uses' => 'SessionController@getLogoutAdmin', 'as' => 'logoutAdmin'));

    Route::get('dashboard', array('uses' => 'DashboardController@index', 'as' => 'dashboard'));

    Route::get('teams/index', array('uses' => 'TeamsController@index', 'as' => 'teams/index'));
    Route::get('teams/all', array('uses' => 'TeamsController@all', 'as' => 'teams/all'));

    Route::patch('dates/patch', array('uses' => 'DatesController@patch', 'as' => 'dates/patch'));
    Route::delete('dates/delete/{date}', array('uses' => 'DatesController@delete', 'as' => 'dates/delete'));

    Route::get('users', array('uses' => 'UserController@index', 'as' => 'users/index'));
    Route::get('users/create', array('uses' => 'UserController@create', 'as' => 'users/create'));

    Route::get('news', array('uses' => 'NewsController@index', 'as' => 'news/index'));
    Route::get('news/create', array('uses' => 'NewsController@create', 'as' => 'news/create'));

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

    Route::get('texts/index', array('uses' => 'TextsController@index', 'as' => 'texts/index'));

});

// ****************************************************** WEB ROUTES ******************************************************

Route::get('settings/{user}', array('uses' => 'CoachController@settings', 'as' => 'settings'));

Route::get('logout', array('uses' => 'SessionController@getLogout', 'as' => 'logout'));
Route::post('login', array('uses' => 'SessionController@postSignIn', 'as' => 'login'));
Route::post('register', array('uses' => 'SessionController@postSignUp', 'as' => 'register'));

Route::get('coach/create', array('uses' => 'CoachController@create', 'as' => 'coach/create'));
Route::post('coach/store', array('uses' => 'CoachController@store', 'as' => 'coach/store'));

Route::get('team/create', array('uses' => 'TeamController@create', 'as' => 'team/create'));
Route::get('team/show/{team}', array('uses' => 'TeamController@show', 'as' => 'team/show'));
Route::post('team/edit/{team}', array('uses' => 'TeamController@edit', 'as' => 'team/edit'));
Route::post('team/store', array('uses' => 'TeamController@store', 'as' => 'team/store'));

Route::get('member/delete/{member}', array('uses' => 'TeamController@delete', 'as' => 'member/delete'));

Route::get('archive/test', array('uses' => 'TextsController@show', 'as' => 'archive/test'));
// Route::get('archive/{tournament}/{region}', array('uses' => 'TextsController@show', 'as' => 'archive'));
Route::get('archive/{tournament}/{region}', ['uses' => 'TextsController@show', 'as' => 'archive']);
// Route::get('archive/{year}/{region}', function($year, $region){ return view('web.test', compact('year', 'region')); });

Route::get('user/register', array('uses' => 'UserController@register', 'as' => 'user/register'));
Route::post('user/registerPost', array('uses' => 'SessionController@postSignUp', 'as' => 'user/registerPost'));
Route::post('tournament/register/{team}', ['uses' => 'TournamentsController@register', 'as' => 'tournament/register']);

Route::get('news/show/{news}', array('uses' => 'NewsController@show', 'as' => 'news/show'));
