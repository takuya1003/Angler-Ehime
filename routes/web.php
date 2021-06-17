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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();
Route::get('/', 'PostController@index')->name('posts.index');

Route::prefix('posts')->group(function (){
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::post('/store', 'PostController@store')->name('posts.store');
    Route::get('/{id}/', 'PostController@show')->name('posts.show');
    Route::get('edit/{id}/', 'PostController@edit')->name('posts.edit');
    Route::patch('update/{id}/', 'PostController@update')->name('posts.update');
});

Route::prefix('comments')->group(function (){
    Route::get('/create', 'CommentController@create')->name('comments.create');
    Route::post('/store', 'CommentController@store')->name('comments.store');
});


