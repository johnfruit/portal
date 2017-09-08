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
// original code
// Route::get('/', function () {
// 	// return realpath(base_path('resources/views'));
//     return view('welcome');
// });
//**********************************
// Route::get('/','PagesController@index');

Route::get('/', 'HomeController@index');
Route::get('users/create', ['uses'=>'UserController@create']);
Route::post('users', ['uses'=>'UserController@store']);
Route::get('/profile/{username}','ProfileController@profile');
// Route::get('/p','task@index');
Route::resource('task','TaskController');


Route::get('blade','PagesController@blade');
Auth::routes();
Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'authenticated'],
	function(){
		Route::get('users','UserController@index');
		Route::get('settings','PagesController@settings');

		// Route::resource('task','TaskController');
		Route::resource('web','WebController');
		Route::post('web/upload', 'WebController@upload');
		Route::resource('telco','TelcoController');
		Route::post('telco/upload', 'TelcoController@upload');
		route::post('telco/export','TelcoController@export');
		Route::resource('rfc','RfcController');
		Route::post('rfc/upload', 'RfcController@upload');
	});

