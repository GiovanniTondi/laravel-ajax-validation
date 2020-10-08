<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index') -> name('post-index');
Route::get('/post/create', 'PostController@create') -> name('post-create');
Route::post('/post/save', 'PostController@save') -> name('post-save');

// API
Route::get('/api/posts/all', 'PostApiController@all') -> name('postApi-all');
