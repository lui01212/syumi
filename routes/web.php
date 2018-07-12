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
//-----------------------------------------------------------------------
//admin
//-----------------------------------------------------------------------
Route::group(['prefix' => 'admin'],function(){
	//-----------------------------------------------------------------------
	//adminMaster
	//-----------------------------------------------------------------------
	Route::get('/','adminController@getAdminPage') -> name('admin');
	//-----------------------------------------------------------------------
	//storyMaster
	//-----------------------------------------------------------------------
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
	//-----------------------------------------------------------------------
	//authorMaster
	//-----------------------------------------------------------------------
	Route::group(['prefix' => 'authorMaster'],function(){
		//
		Route::get('/','AuthorStoryController@getAuthorMaster') -> name('authorMaster.show');
		//
		Route::post('/','AuthorStoryController@postAddAuthorMaster') -> name('authorMaster.create');
		//
		Route::post('/edit','AuthorStoryController@postEditAuthorMaster') -> name('authorMaster.edit');
		//
		Route::get('/delete/{id}','AuthorStoryController@postDeleteAuthorMaster');
	});
	//-----------------------------------------------------------------------
	//listStoryMaster
	//-----------------------------------------------------------------------
	Route::group(['prefix' => 'listStoryMaster'],function(){
		//
		Route::get('/','listStoryController@getListStoryMaster') -> name('listStoryMaster.show');
		//
		Route::post('/','listStoryController@postAddListStoryMaster') -> name('listStoryMaster.create');
		// 
		Route::post('/edit','listStoryController@postEditListStoryMaster') -> name('listStoryMaster.edit');
		// 
		Route::get('/delete/{id}','listStoryController@postListStoryMaster');
		//
		Route::get('/loadData/{id}','listStoryController@getData');
	});
});
