<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>['web']], function(){
	Route::resource('blog','BlogController');	
});

Route::group(['middleware'=>['web']], function(){
	Route::resource('checklist','ChecklistController');	
});
Route::group(['middleware'=>['web']], function(){
	Route::resource('ingredient','IngredientController');	
});
Route::post('checklist/create', 'ChecklistController@create');
Route::post('checklist/update', 'ChecklistController@update');
Route::post('ingredient/update', 'IngredientController@update');
