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

Route::get('/suggestions/create', 'SuggestionController@create')->name('suggestion.create');
Route::post('/suggestions', 'SuggestionController@store')->name('suggestion.store');
Route::get('/suggestions', 'SuggestionController@index')->name('suggestion.index');