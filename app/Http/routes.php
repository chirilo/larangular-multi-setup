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


/*
|--------------------------------------------------------------------------
| Application Routes for the sub-websites (site1, site2)
|--------------------------------------------------------------------------
*/
Route::get('/', 'MainSite\MainSiteController@index');
//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Application Routes for the sub-websites (site1, site2) using the "group routing"
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'site1'], function () {
    /**
    * Matches The "/site1/users" and "site1/home" URL
    */
    Route::get('/site1/home', function ()    {
        return view('site1/home');
    });
    Route::get('/site1/users','Site1\UsersController@index');
});


Route::group(['prefix' => 'site1'], function () {
    /**
    * Matches The "/site1/users" and "site1/home" URL
    */
    Route::get('/site1/home', function ()    {
        return view('site1/home');
    });
    Route::get('/site1/users','Site1\UsersController@index');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
