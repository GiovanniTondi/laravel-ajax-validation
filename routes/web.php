<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index') -> name('post-index');
Route::get('/post/create', 'PostController@create') -> name('post-create');
Route::post('/post/save', 'PostController@save') -> name('post-save');
Route::get('/post/edit/{id}', 'PostController@edit') -> name('post-edit');
Route::post('/post/update/{id}', 'PostController@update') -> name('post-update');
Route::get('/post/delete/{id}', 'PostController@delete') -> name('post-delete');
Route::get('/post/{id}', 'PostController@show') -> name('post-show');

// API
Route::get('/api/posts/all', 'PostApiController@all') -> name('postApi-all');
