<?php

Route::get('/', function () {
    return view('site/welcome');
});

Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function(){
	Route::resource('posts','AdminPostController');
	Route::resource('videos','AdminVideoController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('inicio','HomeController@index');
Route::get('post/{id}','HomeController@post');