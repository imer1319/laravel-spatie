<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('users/password','UserController@password')->name('users.password');
Route::post('user/updatepassword','UserController@updatePassword')->name('users.updatepassword');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
	/***** -- roles -- *****/
	Route::post('roles/store','RolesController@store')->name('roles.store')
	->middleware('permission:roles.create');

	Route::get('roles','RolesController@index')->name('roles.index')
	->middleware('permission:roles.index');

	Route::get('roles/create','RolesController@create')->name('roles.create')
	->middleware('permission:roles.create');

	Route::put('roles/{role}','RolesController@update')->name('roles.update')
	->middleware('permission:roles.edit');

	Route::get('roles/{role}','RolesController@show')->name('roles.show')
	->middleware('permission:roles.show');

	Route::delete('roles/{role}','RolesController@destroy')->name('roles.destroy')
	->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit','RolesController@edit')->name('roles.edit')
	->middleware('permission:roles.edit');

	/***** -- Productos -- *****/
	Route::post('products/store','ProductController@store')->name('products.store')
	->middleware('permission:products.create');

	Route::get('products','ProductController@index')->name('products.index')
	->middleware('permission:products.index');

	Route::get('products/create','ProductController@create')->name('products.create')
	->middleware('permission:products.create');

	Route::put('products/{product}','ProductController@update')->name('products.update')
	->middleware('permission:products.edit');

	Route::get('products/{product}','ProductController@show')->name('products.show')
	->middleware('permission:products.show');

	Route::delete('products/{product}','ProductController@destroy')->name('products.destroy')
	->middleware('permission:products.destroy');

	Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')
	->middleware('permission:products.edit');

	/***** -- Usurios -- *****/
	Route::get('users','UserController@index')->name('users.index')
	->middleware('permission:users.index');

	Route::put('users/{user}','UserController@update')->name('users.update')
	->middleware('permission:users.edit');

	Route::get('users/{user}','UserController@show')->name('users.show')
	->middleware('permission:users.show');

	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
	->middleware('permission:users.destroy');

	Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
	->middleware('permission:users.edit');
});
