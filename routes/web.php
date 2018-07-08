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

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::group(['prefix' => 'admin'],function(){
	//
	Route::get('/','adminController@getAdminPage') -> name('admin');
	//
	Route::group(['prefix' => 'storyMaster'],function(){
		//
		Route::get('/','storyTypeController@getStoryMaster') -> name('storyMaster.show');
		//
		Route::post('/','storyTypeController@postAddStoryMaster') -> name('storyMaster.create');
		//
		Route::post('/edit','storyTypeController@postEditStoryMaster') -> name('storyMaster.edit');
		//
		Route::get('/delete/{id}','storyTypeController@postDeleteStoryMaster');
	});
	//
});
