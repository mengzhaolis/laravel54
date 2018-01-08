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

Route::group(['prefix'=>'admin'], function () {
    Route::any('/index','Admin\IndexController@admin_index');
    Route::any('/indexes','Admin\IndexController@index');
    Route::post('/add','Admin\IndexController@add');
});
//注册
Route::post('/register','RegisterController@register');
//头部
Route::any('/tou','Admin\IndexController@header');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

