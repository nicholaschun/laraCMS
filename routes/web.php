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



/* Initial Setup */
Route::get('/', 'SetupController@index');
Route::get('/getStarted', 'SetupController@getStarted');
Route::post('/getStarted', 'SetupController@postGetStarted');

Route::get('/cc-admin', 'PagesController@adminLogin');
Route::get('/cc-dashboard', 'PagesController@getDashboard');
Route::post('/cc-admin/login-admin', 'AdminController@postAdmin');

/*homeSlider Routes */
Route::resource('admin/homeSlider', 'SliderController');

/*pages routes */
Route::resource('admin/posts', 'PostController');
Route::get('admin/users/roles', 'UsersController@getRoles');
Route::resource('admin/users', 'UsersController');
