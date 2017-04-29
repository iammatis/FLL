<?php

// Default Route
// Route::get('/', function () {
//     return view('admin.login');
// })->name('home');

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

Route::get('createCoach', [
    'uses' => 'CoachController@create',
    'as' => 'createCoach'
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

    Route::post('dates/update/{date}', [
        'uses' => 'DatesController@update',
        'as' => 'datesUpdate'
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

    Route::get('kits/store', [
        'uses' => 'KitsController@store',
        'as' => 'kits/store'
    ]);

    Route::get('invoices', [
        'uses' => 'InvoicesController@index',
        'as' => 'invoices/index'
    ]);
});

// ****************************************************** WEB ROUTES ******************************************************

Route::get('/web', [
    'uses' => 'WebController@index',
    'as' => 'web/index',
]);
// Auth::routes();

Route::get('/home', 'HomeController@index');
