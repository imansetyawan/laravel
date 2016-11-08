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
Route::group(['middleware' => 'auth'], function(){
	Route::get('app/home', 'AdminController@index')->name('admin_home');
	Route::resource('app/info', 'InfoController');
	Route::resource('app/indukkategori', 'IndukController');
	Route::get('/app/logout', 'AdminController@getLogout')->name('get_logout');

	Route::get('app/kategori', 'KategoriController@index')->name('index_kategori');
	Route::get('app/kategori/insert', 'KategoriController@create')->name('get_insert_kategori');
	Route::post('app/kategori/insert', 'KategoriController@store')->name('post_insert_kategori');
	Route::get('app/kategori/edit/{id}', 'KategoriController@edit')->name('get_update_kategori');
	Route::put('app/kategori/edit/{id}', 'KategoriController@update')->name('post_update_kategori');
	Route::delete('app/kategori/delete/{id}', 'KategoriController@destroy')->name('get_delete_kategori');

	Route::get('app/indukkategori', 'IndukController@index')->name('index_indukkategori');
	Route::get('app/indukkategori/insert', 'IndukController@create')->name('get_insert_indukkategori');
	Route::post('app/indukkategori/insert', 'IndukController@store')->name('post_insert_indukkategori');
	Route::get('app/indukkategori/edit/{id}', 'IndukController@edit')->name('get_update_indukkategori');
	Route::put('app/indukkategori/edit/{id}', 'IndukController@update')->name('post_update_indukkategori');
	Route::delete('app/indukkategori/delete/{id}', 'IndukController@destroy')->name('get_delete_indukkategori');

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

	Route::get('app/subscriber', 'subscriberController@index')->name('index_subscriber');
	Route::get('app/subscriber/insert', 'subscriberController@create')->name('get_insert_subscriber');
	Route::post('app/subscriber/insert', 'subscriberController@store')->name('post_insert_subscriber');
	Route::get('app/subscriber/edit/{id}', 'subscriberController@edit')->name('get_update_subscriber');
	Route::put('app/subscriber/edit/{id}', 'subscriberController@update')->name('post_update_subscriber');
	Route::delete('app/subscriber/delete/{id}', 'subscriberController@destroy')->name('get_delete_subscriber');

	Route::get('app/user/profile', 'profilController@index')->name('index_profil');
	Route::get('app/user/profile/edit/{id}', 'profilController@edit')->name('get_update_profil');
	Route::put('app/user/profile/edit/{id}', 'profilController@update')->name('post_update_profil');	
});

Route::group(['middleware' => 'guest'], function(){
Route::get('/login', 'UserController@getLogin')->name('login');
Route::get('/', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin')->name('post_login');
Route::get('/register', 'UserController@getRegister')->name('register');
Route::post('/register', 'UserController@postRegister')->name('post_register');
Route::get('/ForgotPassword', 'UserController@getForgot');
Route::get('/register/verify/{confirmationCode}', 'UserController@confirm');
});

Route::get('/blog/contact', 'BlogController@getContact')->name('get_blog_contact');
Route::post('/blog/contact', 'BlogController@postContact')->name('post_blog_contact');
Route::get('/blog', 'BlogController@index')->name('get_blog');
Route::get('/artikel/{slug}', 'BlogController@show')->name('single_artikel');
Route::get('app/blog/seacrh', 'BlogController@search');
Route::get('/blog/author/{id}', 'BlogController@getAuthor')->name('get_artikel_author');
Route::get('/blog/kategori/{id}', 'BlogController@getKategori')->name('get_kategori_artikel');

Route::get('/error', function(){
	return view('errors.error404');
});