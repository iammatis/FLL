<?php

Route::get('/', function () {
    return view('web.index');
})->name('home');

Route::get('/admin', function () {
    return view('admin.login');
})->name('adminLogin');

/* I. Users Sign up and Sign in and Logout */

Route::post('/admin/signin', [
    'uses' => 'SessionController@postSignInAdmin',
    'as' => 'signinAdmin'
]);

Route::get('/admin/logout', [
    'uses' => 'SessionController@getLogoutAdmin',
    'as' => 'logoutAdmin'
]);

Route::post('signin', [
    'uses' => 'SessionController@postSignIn',
    'as' => 'signIn'
]);

Route::get('logout', [
    'uses' => 'SessionController@getLogout',
    'as' => 'logout'
]);

Route::post('signup', [
    'uses' => 'SessionController@postSignUp',
    'as' => 'signUp'
]);

/* End of I. */

/*========================================
=            Web Users Routes            =
========================================*/

/*----------  Coach routes  ----------*/

Route::get('coach/create', [
    'uses' => 'CoachController@create',
    'as' => 'coach/create'
]);

Route::post('coach/store', [
    'uses' => 'CoachController@store',
    'as' => 'coach/store'
]);

Route::get('team/create', [
    'uses' => 'TeamsController@create',
    'as' => 'team/create'
]);

/*=====  End of Web Users Routes  ======*/


// ****************************************************** ADMIN ROUTES ******************************************************

Route::group([
    'middleware' => ['auth', 'role:admin|editor'],
    'prefix' => 'admin'
    ], function () {

    Route::post('signup', [
        'uses' => 'SessionController@postSignUpAdmin',
        'as' => 'signupAdmin'
    ]);

    Route::get('dashboard', [
        'uses' => 'DashboardController@index',
        'as' => 'dashboard'
    ]);

    Route::get('teams', [
        'uses' => 'TeamsController@index',
        'as' => 'teams/index'
    ]);

    Route::get('teams/all', [
        'uses' => 'TeamsController@all',
        'as' => 'teams/all'
    ]);

    Route::get('dates', [
        'uses' => 'DatesController@index',
        'as' => 'dates'
    ]);

    Route::post('dates/create', [
        'uses' => 'DatesController@create',
        'as' => 'dates/create'
    ]);

    Route::patch('dates/patch/{date}', [
        'uses' => 'DatesController@patch',
        'as' => 'dates/patch'
    ]);

    Route::delete('dates/delete/{date}', [
        'uses' => 'DatesController@delete',
        'as' => 'dates/delete'
    ]);

    Route::get('users', [
        'uses' => 'UserController@index',
        'as' => 'users/index'
    ]);

    Route::get('users/create', [
        'uses' => 'UserController@create',
        'as' => 'users/create'
    ]);

    Route::get('news', [
        'uses' => 'NewsController@index',
        'as' => 'news/index'
    ]);

    Route::get('news/create', [
        'uses' => 'NewsController@create',
        'as' => 'news/create'
    ]);

    Route::get('kits', [
        'uses' => 'KitsController@index',
        'as' => 'kits/index'
    ]);

    Route::patch('kits/patch/{kit}', [
        'uses' => 'KitsController@patch',
        'as' => 'kits/patch'
    ]);

    Route::patch('patchKitsLeft/{id}', [
        'uses' => 'KitsController@patchKitsLeft',
        'as' => 'patchKitsLeft'
    ]);

    Route::get('invoices', [
        'uses' => 'InvoicesController@index',
        'as' => 'invoices/index'
    ]);

    Route::patch('invoices/patch/{invoice}', [
        'uses' => 'InvoicesController@patch',
        'as' => 'invoices/patch'
    ]);

    Route::post('id/store', [
        'uses' => 'IDsController@store',
        'as' => 'id/store'
    ]);

    Route::get('export', [
        'uses' => 'ExportController@export',
        'as' => 'export'
    ]);

});

// ****************************************************** WEB ROUTES ******************************************************

Route::get('/web', [
    'uses' => 'WebController@index',
    'as' => 'web/index',
]);
// Auth::routes();

Route::get('/home', 'HomeController@index');
