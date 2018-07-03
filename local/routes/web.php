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
    return view('welcome');
});
 
Route::get('hello/{name?}/{age?}',function($name = 'null',$age = '1'){
	echo "hello word!".$name.$age;
});

Route::group(['prefix' => 'admin'],function(){
	Route::group(['prefix' => 'sebar'],function(){
		Route::get('left',function(){
				echo "this is left";
		});
	});
	Route::get('home',function(){
		echo "this is home";
	});
});
Route::get('controller/{a}/{b}','MyfirstController@getController');
Route::get('view','MyfirstController@getView');
