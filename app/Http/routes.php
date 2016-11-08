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

//create
Route::group(['middleware' => 'auth'], function(){
	Route::get('app/home', 'AdminController@index');
	Route::resource('app/indukkategori', 'IndukController');
	Route::resource('app/kategori', 'KategoriController');
	Route::resource('app/artikel', 'ArtikelController');
	Route::resource('app/user', 'UserController');
	Route::resource('app/info', 'InfoController');
	Route::resource('app/subscriber', 'SubscriberController');
	Route::get('/app/logout', 'AdminController@getLogout');
	Route::resource('/user/profile', 'ProfilController');

	// Route::get('app/info', 'InfoController@index')->name('index_info');
	// Route::get('app/info/insert', 'InfoController@create')->name('get_insert_info');
	// Route::get('app/info/edit', 'InfoController@edit')->name('get_update_info');
	// Route::post('app/info/insert', 'InfoController@store')->name('post_insert_info');
	// Route::post('app/info/edit', 'InfoController@update')->name('post_update_info');
});

Route::group(['middleware' => 'guest'], function(){
Route::get('/login', 'UserController@getLogin')->name('login');
Route::get('/', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');
Route::get('/register', 'UserController@getRegister')->name('register');
Route::post('/register', 'UserController@postRegister');
Route::get('/ForgotPassword', 'UserController@getForgot');
Route::get('/register/verify/{confirmationCode}', 'UserController@confirm');
});

Route::get('/blog/contact', 'BlogController@getContact');
Route::post('/blog/contact', 'BlogController@postContact');
Route::get('/blog', 'BlogController@index');
Route::get('/artikel/{slug}', 'BlogController@show')->name('single_artikel');
Route::get('app/blog/seacrh', 'BlogController@search');
Route::get('/blog/author/{id}', 'BlogController@getAuthor');
Route::get('/blog/kategori/{id}', 'BlogController@getKategori');

Route::get('/error', function(){
	return view('errors.error404');
});