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
Route::get('/index','MsgsController@index');
Route::get('/add','MsgsController@add');
Route::post('/add','MsgsController@addPost');
Route::get('/del/{id}','MsgsController@del')->where('id','\d+');
Route::match(['/get','post'],'msg/edit/{id}','MsgsController@edit')->where('id','\d+');
Route::post('/texts','TextsController@index');