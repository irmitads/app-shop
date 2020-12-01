<?php



Route::get('/', 'TestController@Welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
