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

Route::get('/', 'frontController@index')->name('front.home');
Route::get('/contact', 'frontController@contact')->name('contact');
Route::get('/shirts', 'frontController@shirts')->name('shirts');
Route::get('/shirt', 'frontController@shirt')->name('shirt');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
  Route::get('/',function(){
    return view('admin.index');
  })->name('admin.index');

  Route::resource('categories', 'CategoriesController');
  Route::resource('product', 'productController');

});
