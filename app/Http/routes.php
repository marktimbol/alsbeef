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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('/stores', ['as' => 'stores.index', 'uses' => 'StoresController@index']);
Route::get('/menus', ['as' => 'menus.index', 'uses' => 'MenusController@index']);
Route::get('/menus/{menus}', ['as' => 'menus.show', 'uses' => 'MenusController@show']);

/**
 * Auth
 */
Route::auth();
Route::get('/home', 'HomeController@index');
