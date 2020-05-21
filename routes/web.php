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
    return view('front');
});

Route::get('login', 'LoginController@index')->name('login');

Route::get('firstquestion/{number}', 'QuestionsController@show')->name('firstquestion');

Route::get('questions/{number}', 'QuestionsController@show2')->name('questions2');
Route::post('answer/{number}', 'QuestionsController@Answers')->name('Answers');


Route::post('start','QuestionsController@start')->name('start');

Route::get('end','QuestionsController@End')->name('end');
