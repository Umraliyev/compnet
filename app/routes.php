<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::get('index', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::get('compnet', ['as' => 'compnet', 'uses' => 'IndexController@compnet']);
Route::get('portfolio', ['as' => 'portfolio', 'uses' => 'IndexController@portfolio']);
Route::get('services/{service?}', ['as' => 'services', 'uses' => 'IndexController@services']);
Route::get('partners', ['as' => 'partners', 'uses' => 'IndexController@partners']);
Route::get('contacts', ['as' => 'contacts', 'uses' => 'IndexController@contacts']);

Route::post('show-service', ['uses' => 'IndexController@showService']);

Route::group(['prefix' => 'admin', 'before' => 'auth'], function()
{
	Route::resource('pages', 'AdminPagesController');
	Route::resource('info', 'AdminInfoController');
	Route::resource('projects', 'AdminProjectsController');

	Route::get('sign-out', ['as' => 'sign-out', 'uses' => 'AuthController@getSignOut']);
});

Route::group(['before' => 'quest'], function()
{
	Route::group(['before' => 'csrf'], function()
	{
		Route::post('send', ['as' => 'send-message', 'uses' => 'IndexController@send']);

		Route::post('sign-in', ['as' => 'post-sign-in', 'uses' => 'AuthController@postSignIn']);
		Route::post('create-account', ['as' => 'post-create-account', 'uses' => 'AuthController@postCreateAccount']);
	});

	Route::get('sign-in', ['as' => 'sign-in', 'uses' => 'AuthController@getSignIn']);
	Route::get('create-account', ['as' => 'create-account', 'uses' => 'AuthController@getCreateAccount']);
});
