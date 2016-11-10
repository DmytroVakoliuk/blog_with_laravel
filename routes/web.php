<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('blog/{slug}', 'BlogController@getSingle')->name('blog.single')
    ->where('slug', '[\w\d\-\_]+'); //accepts any latter, any number, -, _
Route::get('blog', ['uses' => 'BlogController@getIndex'])->name('blog.index');
Route::resource('posts', 'PostController');
Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');
