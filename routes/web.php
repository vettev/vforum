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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::get('/user/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/update', 'UserController@update')->name('user.update');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/category', 'AdminController@category')->name('admin.category');
Route::get('/admin/user', 'AdminController@user')->name('admin.user');
Route::get('/admin/settings', 'AdminController@settings')->name('admin.settings');
Route::post('/admin/settings', 'AdminController@updateSettings')->name('admin.settings.update');

Route::resource('/thread', 'ThreadController');
Route::resource('/category', 'CategoryController');
Route::resource('/post', 'PostController', ['only' => ['store', 'update', 'destroy']]);
Route::resource('/user', 'UserController', ['only' => 'show']);
