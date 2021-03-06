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
Route::get('controller',"mycontroller@index");
Route::post('insertdata',"mycontroller@insert");
Route::match(['get', 'post'],'add','praticeController@add');
Route::match(['get', 'post'],'update','praticeController@update');
Route::get('list','praticeController@getdata');
Route::get('delete','praticeController@delete');


Route::get('/', function () {
    return view('welcome');
});

