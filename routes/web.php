<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('settings', 'SettingsController@index');

Route::get('users', 'UsersController@index');

Route::get('products', 'ProductsController@index');
Route::get('products/create', 'ProductsController@showCreate');
Route::post('products/create', 'ProductsController@create');

Route::get('{username}', function($username) {
    return "Profile for $username";
});
