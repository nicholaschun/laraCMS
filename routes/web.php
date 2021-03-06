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

//User Management Routes
Route::post('/addUserRole', 'UserManagementController@addNewRole');
Route::get('/getUserRoles', 'UserManagementController@getUserRoles');
Route::post('/updateUserRoles/{id}', 'UserManagementController@updateUserRoles');
Route::post('/deleteUserRoles/{id}', 'UserManagementController@deleteUserRoles');

Route::get('/getUserPermissions', 'UserManagementController@getUserPermissions');
Route::post('/addUserPermissions', 'UserManagementController@addUserPermissions');

/*homeSlider Routes */
Route::resource('admin/homeSlider', 'SliderController');

/*pages routes */
Route::resource('admin/posts', 'PostController');
Route::get('admin/users/roles', 'UsersController@getRoles');
Route::resource('admin/users', 'UsersController');

/*Add new user */
Route::post('addNewUser', 'UsersController@addNewUser');
Route::get('getUsers', 'UsersController@getUsers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
