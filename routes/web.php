<?php

Route::get('/', function () {
    return view('site/welcome');
});
Route::namespace('Admin')->prefix('admin')->group(function(){
	Route::resource('posts','AdminPostController');
	Route::resource('videos','AdminVideoController');
});

