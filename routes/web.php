<?php

Route::get('/', function () {
    return view('site.blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/{id}','PostController@show');
Route::get('category/{id}', 'CategoryController@show');

// oute::prefix('admin')->middleware('auth')->group(function () {
Route::prefix('painel')->group(function () {
    Route::get('/', function() {
        return view('admin.dashboard');
    });
    Route::resource('user', 'UserController');
    Route::resource('post', 'PostController');
    Route::resource('category', 'CategoryController');
});