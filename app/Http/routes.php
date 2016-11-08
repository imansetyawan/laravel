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
	Route::resource('app/info', 'InfoController');
	Route::resource('app/subscriber', 'SubscriberController');
	Route::get('/app/logout', 'AdminController@getLogout');
	Route::resource('/user/profile', 'ProfilController');

	// Route::get('app/info', 'InfoController@index')->name('index_info');
	// Route::get('app/info/insert', 'InfoController@create')->name('get_insert_info');
	// Route::get('app/info/edit', 'InfoController@edit')->name('get_update_info');
	// Route::post('app/info/insert', 'InfoController@store')->name('post_insert_info');
	// Route::post('app/info/edit', 'InfoController@update')->name('post_update_info');

	Route::get('app/user', 'UserController@index')->name('index_user');
	Route::get('app/user/insert', 'UserController@create')->name('get_insert_user');
	Route::post('app/user/insert', 'UserController@store')->name('post_insert_user');
	Route::get('app/user/edit/{id}', 'UserController@edit')->name('get_update_user');
	Route::put('app/user/edit/{id}', 'UserController@update')->name('post_update_user');
	Route::delete('app/user/delete/{id}', 'UserController@destroy')->name('get_delete_user');

	Route::get('app/artikel', 'ArtikelController@index')->name('index_artikel');
	Route::get('app/artikel/insert', 'ArtikelController@create')->name('get_insert_artikel');
	Route::post('app/artikel/insert', 'ArtikelController@store')->name('post_insert_artikel');
	Route::get('app/artikel/edit/{id}', 'ArtikelController@edit')->name('get_update_artikel');
	Route::put('app/artikel/edit/{id}', 'ArtikelController@update')->name('post_update_artikel');
	Route::delete('app/artikel/delete/{id}', 'ArtikelController@destroy')->name('get_delete_artikel');
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