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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', "CategoriesController");

// Route::get('/categories', 'CategoriesController@index');

// Route::get('categories/create', 'CategoriesController@create');
// Route::post('store-category', 'CategoriesController@store');

// Route::get('categories/{category}/edit', 'CategoriesController@edit');
// Route::post('categories/{category}/update-category', 'CategoriesController@update');
// Route::get('categories/{category}/delete', 'CategoriesController@destroy');
