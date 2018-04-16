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
Route::get('test', function () {
    return view('master');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('login',function(){
	return view('login');
});
Route::post('login','LoginController@postLogin');
Route::get('',function(){
	return view('home');
});

Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'category'],function(){

		Route::get('list','CategoryController@getList');

		Route::get('add','CategoryController@getAdd');
		Route::post('add','CategoryController@postAdd');

		Route::get('edit/{id}','CategoryController@getEdit');
		Route::post('edit/{id}','CategoryController@postEdit');

		Route::get('delete/{id}','CategoryController@getDelete');


	});
	Route::group(['prefix'=>'manufacture'],function(){

		
		Route::get('list','ManufactureController@getList');

		Route::get('add','ManufactureController@getAdd');
		Route::post('add','ManufactureController@postAdd');

		Route::get('edit/{id}','ManufactureController@getEdit');
		Route::post('edit/{id}','ManufactureController@postEdit');

		Route::get('delete/{id}','ManufactureController@getDelete');

	});
	Route::group(['prefix'=>'product'],function(){

		Route::get('list','ProductController@getList');

		Route::get('add','ProductController@getAdd');
		Route::post('add','ProductController@postAdd');

		Route::get('edit/{id}','ProductController@getEdit');
		Route::post('edit/{id}','ProductController@postEdit');
		Route::get('delete/{id}','ProductController@getDelete');

	});
	Route::group(['prefix'=>'slide'],function(){

		Route::get('list','SlideController@getList');

		Route::get('add','SlideController@getAdd');
		Route::post('add','SlideController@postAdd');

		Route::get('edit/{id}','SlideController@getEdit');
		
		Route::post('edit/{id}','slideController@postEdit');
		Route::get('delete/{id}','SlideController@getDelete');


	});
	Route::group(['prefix'=>'user'],function(){

		Route::get('liUserst','UserController@getList');

		Route::get('add','UserController@getAdd');

		Route::get('edit','UserController@getEdit');

	});

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');