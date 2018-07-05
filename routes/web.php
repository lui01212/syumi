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
Route::get('/view/{name}/{age}','MyFristController@getController');
//
Route::get('/post','MyFristController@getPost');
//
Route::get('/catagory','MyFristController@getCatagory');

Route::get('db','MyFristController@updateUser');

Route::get('insert','MyFristController@insertUser');

Route::get('login','MyFristController@getLogin');