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
Route::get('/', function(){
	return redirect()->action('EstateController@search');
});

Route::get('/help', function(){
	return view('help');
});

Route::get('estate/create', 'EstateController@create');
Route::post('estate', 'EstateController@store');
Route::get('estate', 'EstateController@index');
Route::get('estate/search', 'EstateController@search');
Route::post('estate/search', 'EstateController@find');
Route::get('estate/{estate}/edit', 'EstateController@edit');
Route::put('estate/{estate}', 'EstateController@update');


Route::get('type/create', 'TypeController@create');
Route::post('type', 'TypeController@store');
Route::get('type/edit', 'TypeController@edit');
Route::post('type/update', 'TypeController@update');

Route::get('township/create', 'TownshipController@create');
Route::post('township', 'TownshipController@store');
Route::get('township/edit', 'TownshipController@edit');
Route::post('township/update', 'TownshipController@update');