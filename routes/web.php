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
Route::get('/suggestions/{id}/edit', 'SuggestionController@edit')->name('suggestion.edit');
Route::patch('/suggestions/{id}', 'SuggestionController@update')->name('suggestion.update');
Route::delete('/suggestions/{id}', 'SuggestionController@destroy')->name('suggestion.destroy');

Route::post('/suggestions/{id}/upvote', 'VoteController@upvote')->name('suggestion.upvote');
Route::delete('/suggestions/{id}/downvote', 'VoteController@downvote')->name('suggestion.downvote');